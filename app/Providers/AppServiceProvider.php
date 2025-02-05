<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('access-data-gardu', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('access-data-jtr', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('access-data-jtm', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-pengoperasian-gd', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-pengoperasian-jtr', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-pengoperasian-jtm', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-penghapusan-gd', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-update-gd', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-update-jtr', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('ba-update-jtm', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

    }
}
