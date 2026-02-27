<?php

namespace Tests\Feature\Admin;

use App\Modules\Company\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CompanyShowTest extends TestCase
{
    use RefreshDatabase, WithFaker;

     /**
     * Test that the show method displays a specific company.
     * @return void
     */
     #[Test()]    
    function it_can_display_a_specific_company() : void {
        //Arrange - Arranque
        $user = User::factory()->create();//Crear un usuario para autenticarse
        $company = Company::factory()->create();
        //Act - Acción
        $response = $this->actingAs($user)->get(route('admin.companies.show', $company));
        //Assert - Afirmación
        $response->assertStatus(200);
        $response->assertInertia(fn($page)=>$page
          ->component('Admin/Companies/Show')
          ->has('company', fn($page) => $page
            ->where('email', $company->email)
            ->where('name', $company->name)
            ->etc()
        )
    );
    }
}
