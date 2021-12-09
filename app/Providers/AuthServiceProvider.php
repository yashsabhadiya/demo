<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\DemoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        // if (! $this->app->routesAreCached()) {
        //     Passport::routes();
        // }

        // Gate::define('demo',function($data){
        //     if($data->id == '1'){
        //         return true;
        //     }
        //     else
        //     {
        //         return false;
        //     }
        // });
        // Gate::define('demo','App\Policies\DemoPolicy@demo');
        // Passport::routes();
    }
}
