<?php

use Illuminate\Support\Facades\Route;

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

/*VISTA PRINCIPAL*/
Route::get('/', function () {
    return view('/principal/index');
});
/*VISTA DE TIENDA*/
Route::get('/tienda', function () {
    return view('/principal/tienda');
});
/*VISTA CONTACTOS*/
Route::get('/contacto', function () {
    return view('/principal/contacto');
});
/*MANDAR CONTACTOS*/
Route::post('/contactar', 'EmailController@contact')->name('contact');
/*VISTA DE ACERCA DE*/
Route::get('/acerca_de', function () {
    return view('/principal/acerca_De');
});
/*VISTA DE INFORMACION DEL PLATILLO*/
Route::get('/info_platillo', function () {
    return view('/principal/info_platillo');
});
/*VISTA DEL CARRITO DE COMPRAS*/
Route::get('/carrito_compras', function () {
    return view('/principal/carrito_compras');
});
/*VISTA PARA PAGAR LAS COMPRAS*/
Route::get('/pagar', function () {
    return view('/principal/pagar');
});
