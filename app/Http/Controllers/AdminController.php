<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class AdminController extends Controller
{
    public function index(){
		return view('Admin/Admin');
    }
    public function ProductosContador(){
        $contador=Producto::count();
        return $contador;
    }
    public function CategoriasContador(){
        $contador=Categoria::count();
        return $contador;      
      }
    public function CrearCategoria(){
        request()->all();
        $categoria=request('categoria');
        Categoria::create([
            'categoria' => request('categoria'),
            ]);
        return;
    }
    public function CrearProducto(){
        request()->all();
        Producto::create([
        'producto' => request('producto'),
        'descripcion' => request('descripcion'),
        'categoria' => request('categoria'),
        'url' => request('url'),
        ]);    
        return;
    }
}