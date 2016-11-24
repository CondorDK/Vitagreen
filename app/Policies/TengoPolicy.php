<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Tengo;

class TengoPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Tengo $tengo)
    {
        return $user->id === $tengo->user_id;
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}