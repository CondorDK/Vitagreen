<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Necesito extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'categoria_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }
}
