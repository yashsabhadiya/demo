<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;
use App\Repos\Demo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Demo::class,function(){
            return new Demo(User::first());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bindMethod([Notification::class, 'handle'], function ($job, $app) {
            return $app->make(Notification::class);
        });
    }
}
