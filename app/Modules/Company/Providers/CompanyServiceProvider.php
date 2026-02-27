<?php

namespace App\Modules\Company\Providers;

use App\Modules\Company\Contracts\CompanyRepositoryInterface;
use App\Modules\Company\Contracts\CompanyServiceInterface;
use App\Modules\Company\Repositories\EloquentCompanyRepository;
use App\Modules\Company\Services\CompanyService;
use Illuminate\Support\ServiceProvider;

class CompanyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            CompanyRepositoryInterface::class,
            EloquentCompanyRepository::class
        );

        $this->app->bind(
            CompanyServiceInterface::class,
            CompanyService::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
