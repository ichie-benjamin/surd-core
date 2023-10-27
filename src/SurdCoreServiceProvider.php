<?php

namespace Surd\SurdCore;

use Illuminate\Support\ServiceProvider;
use Surd\SurdCore\Http\Middleware\SurdCoreMiddleware;

class SurdCoreServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        app('router')->aliasMiddleware('surd_core', SurdCoreMiddleware::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes/web.php';
        }
    }
}
