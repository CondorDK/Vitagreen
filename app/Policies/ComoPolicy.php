<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Como;

class ComoPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Como $como)
    {
        return $user->id === $como->user_id;
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