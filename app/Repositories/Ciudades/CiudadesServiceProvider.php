<?php

namespace App\Repositories\Ciudades;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class CiudadesServiceProvider extends ServiceProvider
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
    $this->app->bind('App\Repositories\Paises\CiudadesRepositoryInterface','App\Repositories\Paises\CiudadesRepository');
    }
}