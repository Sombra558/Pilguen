<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
   public function store(Request $request){
    request()->all();
    Tipo::create([
        'tipo' => request('tipo'),
        ]);
    return;
    }
    public function update(Request $request, $id){
        Tipo::find($id)->update([
            'tipo' => request('tipo'),
			]);
    return;
    }
    public function index(){
        $Tiposs = Tipo::all(); 
        return $Tiposs;
    }
    public function destroy($id){
        Tipo::find($id)->delete();
    }
    public function tipoContador(){
        $contador=Tipo::count();
        return $contador;
    }
}
