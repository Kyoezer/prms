<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-admin', function ($user) {
          return $user->hasAnyRole('admin');
        });

        Gate::define('is-secretariat', function ($user) {
          return $user->hasAnyRole('secretariat');
        });

        Gate::define('is-member', function ($user) {
          return $user->hasAnyRole('member');
        });
    }
}
