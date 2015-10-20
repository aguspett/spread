<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(
    )
    {

        $this->composeSidebar();
        $this->composeMenu();


    }

    public function composeSidebar(
    )
    {
        view()->composer('sidebar',
            'App\Http\Composers\sidebarComposer');

    }

    public function composeMenu(
    )
    {
        view()->composer('partials.menu',
            'App\Http\Composers\menuComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(
    )
    {

        if ($this->app->isLocal()) {
            $this->app->register('Kurt\Repoist\RepoistServiceProvider');
        }

    }
}
