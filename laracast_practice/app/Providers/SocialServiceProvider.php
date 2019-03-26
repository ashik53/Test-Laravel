<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Twitter;
use App\Services\Google;
use App\Services\Facebbok;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Twitter::class, function(){

            return new Twitter(config('services.twitter'));

        });

        /*
        $this->app->singleton(Facebook::class, function(){

            return new Faebook('This is an new facebook apiKey');

        });

        $this->app->singleton(Google::class, function(){

            return new Google('This is a google new apiKey');

        }); 
        */ 

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
