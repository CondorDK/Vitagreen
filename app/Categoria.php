<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    public function necesitos()
    {
    	return $this->hasMany('App\Necesito');
    }

    public function tengos()
    {
    	return $this->hasMany('App\Tengo');
    }

    public function comos()
    {
    	return $this->hasMany('App\Como');
    }
}
