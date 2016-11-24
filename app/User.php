<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function necesitos()
    {
        return $this->hasMany(Necesito::class);
    }

    public function tengos()
    {
        return $this->hasMany(Tengo::class);
    }

    public function comos()
    {
        return $this->hasMany(Como::class);
    }
}
