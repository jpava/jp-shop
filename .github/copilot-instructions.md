# JP Shop AI coding guide

## Project overview
- Laravel 12 backend with Inertia.js + Vue 3 SPA frontend (Breeze scaffolding).
- Inertia root view is [resources/views/app.blade.php](resources/views/app.blade.php); Vite bootstraps from [resources/js/app.js](resources/js/app.js).
- Routes render Vue pages via `Inertia::render()` in [routes/web.php](routes/web.php) and auth flows in [routes/auth.php](routes/auth.php).

## Backend → Frontend data flow
- Shared Inertia props live in [app/Http/Middleware/HandleInertiaRequests.php](app/Http/Middleware/HandleInertiaRequests.php) (`auth.user` used across layouts).
- Example: `Inertia::render('Profile/Edit', ...)` maps to [resources/js/Pages/Profile/Edit.vue](resources/js/Pages/Profile/Edit.vue).

## Frontend structure & patterns
- Pages live under [resources/js/Pages](resources/js/Pages); layouts under [resources/js/Layouts](resources/js/Layouts) and reusable UI in [resources/js/Components](resources/js/Components).
- Use Ziggy’s `route()` helper in Vue (installed in [resources/js/app.js](resources/js/app.js)); links/forms rely on `@inertiajs/vue3` (`Link`, `useForm`).
- Tailwind CSS is configured in [tailwind.config.js](tailwind.config.js) and compiled via Vite.

## Critical workflows
- One-time setup: `composer run setup` (installs deps, prepares .env, migrates, builds assets).
- Dev: `composer run dev` (starts PHP server, queue worker, and Vite in parallel).
- Frontend only: `npm run dev` / `npm run build`; lint JS/Vue with `npm run lint`.
- Tests: `composer run test` (Laravel test runner).

## Testing & TDD principles
- Write tests **first** before implementation (Test-Driven Development).
- Unit tests live in [tests/Unit](tests/Unit); feature/integration tests in [tests/Feature](tests/Feature).
- Use PHPUnit assertions and Laravel testing utilities (`actingAs()`, `post()`, `get()`, etc.).
- Tests should be focused, isolated, and independent; mock external dependencies.
- Run tests frequently: `composer run test` or `./vendor/bin/phpunit tests/Unit`.
- Aim for >80% code coverage on business logic and controllers.

## SOLID principles in JP Shop
Apply these principles to maintain clean, maintainable, testable code:

### S - Single Responsibility Principle
- Each class/component should have **one reason to change**.
- **Backend**: Controllers handle requests only; logic goes in Services. E.g., `UserService` handles user operations, not the controller.
- **Frontend**: Components should do one thing (e.g., `UserForm.vue` for input, not rendering lists).
- **Example**: Extract payment processing to `PaymentService` class, not in controller.

### O - Open/Closed Principle
- Code should be **open for extension, closed for modification**.
- Use **interfaces** and abstract classes for extensibility.
- **Backend**: Define `PaymentInterface`, then create `StripePayment` and `PayPalPayment` implementations without changing existing code.
- **Frontend**: Use composition and props; avoid hardcoding logic in components.

### L - Liskov Substitution Principle
- Subclasses must be **substitutable for their parent** without breaking behavior.
- **Backend**: If `UserRepository` extends `BaseRepository`, child implementations must work identically in client code.
- **Frontend**: Child components receiving same props should render/behave consistently.
- Always honor parent contracts; don't override with incompatible behavior.

### I - Interface Segregation Principle
- Clients should **depend on specific interfaces**, not bloated ones.
- **Backend**: Don't create one `UserRepository` interface with 30 methods; split into `Readable`, `Writable`, `Deletable`.
- **Frontend**: Props should be minimal and focused (e.g., `{ id, name, email }` not entire user object if unused).
- **Example**: `OrderProcessor` interface has `process()`, separate `OrderValidator` for validation.

### D - Dependency Injection Principle
- **Inject dependencies**, don't instantiate them inside classes.
- **Backend**: Use Laravel's container in constructors.
  ```php
  class OrderController {
      public function __construct(OrderService $service) { $this->service = $service; }
  }
  ```
- **Frontend**: Use Vue composables or pass data via props; avoid direct imports/singletons in components.
- Enables testing by swapping real services with mocks.

## TDD + SOLID workflow for JP Shop
1. **Write failing test** that describes desired behavior (what should happen).
2. **Write minimal code** to pass the test (implementation).
3. **Refactor** applying SOLID principles: extract concerns, create interfaces, inject dependencies.
4. **Iterate**: tests guide refactoring safely.
5. **Example**:
   - Test: `testOrderCalculatesTotalWithTax()`
   - Implement: `Order::calculateTotal()` in `OrderService`
   - Refactor: Extract `TaxCalculator` (single responsibility), inject via constructor (dependency injection).

## Conventions & gotchas
- Prefer Inertia responses in controllers (see [app/Http/Controllers/ProfileController.php](app/Http/Controllers/ProfileController.php)).
- The Inertia root view is `app` (see [app/Http/Middleware/HandleInertiaRequests.php](app/Http/Middleware/HandleInertiaRequests.php)); keep page components under `resources/js/Pages` with matching names.
- Asset prefetching is enabled via Vite in [app/Providers/AppServiceProvider.php](app/Providers/AppServiceProvider.php).
