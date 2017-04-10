<?php

namespace App\Providers;

use App\Workspace;
use Illuminate\Support\ServiceProvider;

class WorkplaceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('werkplaats.werkplaats-overzicht', function ($view) {
           $view->with('workplaces', Workspace::all());
        });




    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
