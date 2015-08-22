<?php

namespace App\Repositories\Provincias ;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ProvinciasServiceProvider extends ServiceProvider
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
    $this->app->bind('App\Repositories\Provincias\ProvinciasRepositoryInterface','App\Repositories\Provincias\ProvinciasRepository');
    }
}