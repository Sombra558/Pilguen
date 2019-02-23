<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
class PublicController extends Controller
{
    public function index(){
        return view('Catalogo');
    }
    public function ProductoListado(){
        $productos=Producto::get();
        return $productos;
    }
    public function CategoriaListado(){
        $categorias=Categoria::get();
        return $categorias;
    }
    public function DetalleProducto($id){
		$producto = Producto::find($id);
    	return view('pages\CatalogoDetalles',compact('producto'));
    }
    
}
