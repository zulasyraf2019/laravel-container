<?php

namespace Mbsp\Sisken;

use Illuminate\Support\ServiceProvider;

class SiskenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Mbsp\Sisken\Controllers\SiskenController');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'sisken');
    }
}
