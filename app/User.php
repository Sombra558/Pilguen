<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','lastname', 'email', 'password','is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function carrito()
    {
        return $this->hasOne('App\Cotizar');
    }
    public function pedido()
    {
        return $this->hasOne('App\Pedido');
    }
    public function carrito2()
    {
        return $this->hasOne('App\Carrito');
    }
}
