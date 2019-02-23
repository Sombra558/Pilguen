@extends('layouts.DetalleCata')

@section('content')

<div class="card row">
            <div class="card-header col-md-12">
                        <h1>{{$producto ->producto}}</h1>
            </div>
    <div class="row">
                        <div class="card-body col-md-6">
                                <p class="card-text text-justify ">{{$producto->descripcion}}</p>
                                <div>Categoria: {{$producto->categoria}}</div>   
                        </div>
                        <div class="card-body col-md-6">
                                    <div id="carrito">
                                    </div>            
                        </div>
    
    <div>
</div>

@endsection