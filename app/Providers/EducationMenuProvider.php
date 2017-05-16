<?php

namespace App\Providers;

use App\Educatie;
use Illuminate\Support\ServiceProvider;

class EducationMenuProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.website', function($view) {
            $view->with('educationItems', Educatie::all());
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
