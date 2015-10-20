<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(
    )
    {
        $this->composePaisesSelect();
    }

    public function composePaisesSelect(
    )
    {
        view()->composer('paises.partial.paisSelect',
            'App\Http\Composers\geoComposer@PaisSelect');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(
    )
    {
        $this->app->bind('App\Contracts\PaisesRepositoryInterface',
            'App\Repositories\PaisesRepository');
        $this->app->bind('App\Contracts\ProvinciasRepositoryInterface',
            'App\Repositories\ProvinciasRepository');
        $this->app->bind('App\Contracts\PartidosRepositoryInterface',
            'App\Repositories\PartidosRepository');
        $this->app->bind('App\Contracts\CiudadesRepositoryInterface',
            'App\Repositories\CiudadesRepository');
    }

}
