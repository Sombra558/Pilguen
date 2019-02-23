<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizar extends Model
{
    protected $fillable = [
        'cantidad','medida','user_id','producto_id','carrito_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
    public function Pedido()
    {
        return $this->belongsTo('App\Pedido', 'foreign_key');
    }
    public function Carrito()
    {
        return $this->belongsTo('App\Carrito', 'foreign_key');
    }
}
