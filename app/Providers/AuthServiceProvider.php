<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\Admin\AdminPolicy;
use App\Policies\User\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $policies = [
        User::class =>AdminPolicy::class,
        User::class =>UserPolicy::class,
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('view-admin', [AdminPolicy::class, 'view']);
        Gate::define('view-user', [UserPolicy::class, 'view']);
    }
}
