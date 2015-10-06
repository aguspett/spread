<?php

namespace App\Providers ;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class PartidosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->bind('App\Repositories\Paises\PartidosRepositoryInterface','App\Repositories\Paises\PartidosRepository');
    }
}
