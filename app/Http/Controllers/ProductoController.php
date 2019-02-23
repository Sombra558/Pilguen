<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Tipo;

class ProductoController extends Controller
{
    //almacen
    public function store(){
        request()->all();
        Producto::create([
        'producto' => request('producto'),
        'descripcion' => request('descripcion'),
        'categoria' => request('categoria'),
        'tipo' => request('tipo'),
        'url' => request('url'),
        ]);    
        return;
    }
    //crear
    public function create(Request $request){
        return;
    }
    //mirar de manera individual
    public function show($id){
        $producto = Producto::find($id); 
        return $producto;
    }
    //Actualizar
    public function update(Request $request, $id){
        Producto::find($id)->update([
            'producto' => request('producto'),
            'descripcion' => request('descripcion'),
            'categoria' => request('categoria'),
            'tipo' => request('tipo'),
            'url' => request('url'),
			]);
    return;
    }
    //eliminar
    public function destroy($id){
        Producto::find($id)->delete();
    }
    //editar
    public function edit($id) {
        
    }
    public function ProductosContador(){
        $contador=Producto::count();
        return $contador;
    }
}
