<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = [
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
    public function carrito()
    {
        return $this->hasOne('App\Cotizar');
    }
}
