<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Catalogo', 'PublicController@index');
Route::get('/Catalogo/listado', 'PublicController@ProductoListado');
Route::get('/Catalogo/Categorialistado', 'PublicController@CategoriaListado');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/ControlAdmin', 'AdminController@index');
    Route::get('/ControlAdmin/ProductoContador', 'AdminController@ProductosContador');
    Route::get('/ControlAdmin/CategoriasContador', 'AdminController@CategoriasContador');
    Route::post('/ControlAdmin/CrearProducto', 'AdminController@CrearProducto');
    Route::post('/ControlAdmin/CrearCategoria', 'AdminController@CrearCategoria');
});
Auth::routes();
//Route::get('/{id}','PublicController@DetalleProducto');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/AgregarProducto', 'HomeController@AgregarProducto');
Route::get('/Carrito/Lista', 'HomeController@CarritoLista');
Route::post('/ProcesarPedido', 'HomeController@ProcesarPedido');
Route::post('/ProcesarCarrito', 'HomeController@ProcesarCarrito');
Route::get('/TomarCarrito', 'HomeController@TomarCarrito');
Route::get('/Carrito/Contador', 'HomeController@CarritoContador');
Route::resource('Carrito','HomeController',['except' => 'show', 'create', 'edit']);