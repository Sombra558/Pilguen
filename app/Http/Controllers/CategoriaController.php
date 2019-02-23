<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
   public function store(Request $request){
    request()->all();
    Categoria::create([
        'categoria' => request('categoria'),
        ]);
    return;
    }
    public function update(Request $request, $id){
        Producto::find($id)->update([
            'categoria' => request('categoria'),
			]);
    return;
    }
    public function index(){
        $Categorias = Categoria::all(); 
        return $Categorias;
    }
    public function destroy($id){
        Categoria::find($id)->delete();
    }
    public function CategoriasContador(){
        $contador=Categoria::count();
        return $contador;      
      }
}
