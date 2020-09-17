<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Teacher;

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

        view()->composer('home', function (){
            $courses=Teacher::all();
            
        });
    }
}
