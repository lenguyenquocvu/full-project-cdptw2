<?php

namespace Topic\Result;

use Illuminate\Support\ServiceProvider;

class ResultServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'result');
        $this->publishes([__DIR__.'/public' => public_path('result')], 'public');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Topic\Result\Http\Controllers\LoginController');
        $this->app->make('Topic\Result\Http\Controllers\MembersController');
        $this->app->make('Topic\Result\Http\Controllers\SubmitController');
        $this->app->make('Topic\Result\Http\Controllers\AdminController');
        $this->app->make('Topic\Result\Http\Controllers\TeacherController');
    }
}
