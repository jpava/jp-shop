<?php

namespace {{ namespace }}\Providers;

use {{ namespace }}\Contracts\{{ class }}RepositoryInterface;
use {{ namespace }}\Contracts\{{ class }}ServiceInterface;
use {{ namespace }}\Repositories\Eloquent{{ class }}Repository;
use {{ namespace }}\Services\{{ class }}Service;
use Illuminate\Support\ServiceProvider;

class {{ class }}ServiceProvider extends ServiceProvider
{
    /**
     * Register services
     */
    public function register(): void
    {
        // Registrar la implementación del repositorio
        $this->app->bind(
            {{ class }}RepositoryInterface::class,
            Eloquent{{ class }}Repository::class
        );

        // Registrar la implementación del servicio
        $this->app->bind(
            {{ class }}ServiceInterface::class,
            {{ class }}Service::class
        );
    }

    /**
     * Bootstrap services
     */
    public function boot(): void
    {
        //
    }
}
