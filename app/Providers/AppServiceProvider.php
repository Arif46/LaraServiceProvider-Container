<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('first_service_provider', function($app){
            dd('this is my first service container');
        });

        app()->bind('secound_service_provider', function($app){
            dd('this is my secound service container');
        });

        app()->bind('third_serive_container', function($app){
            dd("this is my third service provider");
        });
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
