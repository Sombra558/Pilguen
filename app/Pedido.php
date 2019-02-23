<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'carrito_id','user_id',
    ];
    public function carrito()
    {
        return $this->belongsTo('App\Carrito', 'foreign_key');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
    
}
