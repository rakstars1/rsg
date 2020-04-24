<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\EloquentInterface',
            'App\Repositories\MYSQL\BaseRepository'
        );
        $this->app->bind(
            'App\Repositories\RSGInterface',
            'App\Repositories\MYSQL\RSGRepository'
        );
    }

    public function boot()
    {
        //
    }
}
