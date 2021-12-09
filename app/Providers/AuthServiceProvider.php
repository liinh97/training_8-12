<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Repositories\UserRepository;
use Illuminate\Auth\EloquentUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        $this->app['auth']->provider('authUser', function ($app, array $config) {
            $username = request()->username;
            $user = (new UserRepository())->firstBy(['username' => $username]);
            $model = $app['config']['auth.providers.users.model'];
            if($user){
                return new EloquentUserProvider($app['hash'], $model);
            }
            return new CustomUserProvider($app['hash'], $model);
        });
    }
}
