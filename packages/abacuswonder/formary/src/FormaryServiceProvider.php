<?php

namespace AbacusWonder\Formary;

use Illuminate\Support\ServiceProvider;

class FormaryServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'formary');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/abacuswonder'),
        ], 'public');
    }
}
