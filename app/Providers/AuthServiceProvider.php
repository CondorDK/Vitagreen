<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Necesito' => 'App\Policies\NecesitoPolicy',
        'App\Tengo' => 'App\Policies\TengoPolicy',
        'App\Como' => 'App\Policies\ComoPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // $gate->define('read-necesito',function($user, $necesito){
        //     return $user->id === $necesito->user_id;
        // });
    }
}
