<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layout.header',
            'App\Http\ViewComposers\HeaderComposer'
        );

        view()->composer(
            'layout.header',
            'App\Http\ViewComposers\LogoComposer'
        );

        view()->composer('home', function ($view){
            $view->with('courses', DB::table('courses')->take(1)->get());
        });
    }
}
