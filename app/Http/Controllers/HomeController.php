<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Cotizar;
use App\Pedido;
use App\Carrito;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function AgregarProducto()
    {
        request()->all();
        Cotizar::create([
        'cantidad' => request('cantidad'),
        'medida' => request('medida'),
        'user_id' => auth()->user()->id,
        'producto_id' => request('producto_id'),
        'carrito_id' => 1,
        ]);    
        return;
    }
    public function CarritoContador()
    {
        $contador=Cotizar::all()->where('user_id', auth()->user()->id)->count();  
        return $contador;
    }
    public function CarritoLista()
    {
        $user = User::find(auth()->user()->id);
        $carrito=$user->carrito()->where('user_id', auth()->user()->id)->get();  
        return $carrito;
    }
    public function destroy($id)
    {
        Cotizar::find($id)->delete();
    
    }
    public function ProcesarPedido()
    { 
        $user = User::find(auth()->user()->id);

        $pedido = $user->pedido()->create([
            'user_id' => request('user_id'),
        ]);   
        return $pedido;
    }
    public function ProcesarCarrito()
    { 
        $user = User::find(auth()->user()->id);

        $carrito = $user->carrito2()->create([
            'user_id' => auth()->user()->id,
        ]);   
        return $carrito;
    }
    public function TomarCarrito()
    { 
        $user = User::find(auth()->user()->id);
        $carrito=$user->carrito2()->where('user_id', auth()->user()->id)->get();  
        return  $carrito;
    }
}
