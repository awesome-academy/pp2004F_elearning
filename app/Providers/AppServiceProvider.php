<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Repository\TeacherRepositoryInterface::class, \App\Repository\Eloquent\TeacherRepository::class);
        $this->app->singleton(\App\Repository\EloquentRepositoryInterface::class, \App\Repository\Eloquent\BaseRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
