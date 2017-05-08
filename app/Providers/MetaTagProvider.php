<?php

namespace App\Providers;

use App\RouteMetaTag;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class MetaTagProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('partials.meta-tags', function($view) {
            $currentPath= Route::getFacadeRoot()->current()->uri();
            // Log::info('route: ' . $routeName);
            $metaTag = RouteMetaTag::where('route', $currentPath)->first();

            $title = '';
            $description = '';
            if ($metaTag == null) {
                $title = config('app.name', 'Laravel');
            } else {
                $title = $metaTag->title;
                $description = $metaTag->description;
            }
            $view->with(['title' => $title, 'description' => $description]);

        });
    }
}
