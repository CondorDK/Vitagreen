<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Necesito;

class NecesitoPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Necesito $necesito)
    {
        return $user->id === $necesito->user_id;
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
