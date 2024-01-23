<?php

namespace Modules\Client\Providers;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{

    public function register():void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->app->register(ClientRouteServiceProvider::class);
    }

    public function boot():void
    {
        //
    }

}
