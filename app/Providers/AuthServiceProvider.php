<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-blog', function ($user) {
            //           dd($user);
            return $user->isAdmin;
        });

        Gate::define('store-blog', function ($user) {
            //           dd($user);
            return $user->isAdmin;
        });

        Gate::define('edit-blog', function ($user) {
            //           dd($user);
            return $user->isAdmin;
        });

        Gate::define('update-blog', function ($user) {
            //           dd($user);
            return $user->isAdmin;
        });
    }

}
