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


Route::get('/prueba', function () {
    return view('/principal/prueba');
});

/*APARTADO PARA EL ADMINISTRADOR*/
/*INICIO PARA LA VENTANA DEL ADMINISTRADOR*/
Route::get('/Admin_restaurante', function () {
    return view('/Administrador/index');
});

/*ADMINISTRADOR ALIMENTOS*/

Route::get('/admin_alimentos','AlimentosController@alimentos_mostrar');
Route::post('/admin_alimentos_borrar','AlimentosController@eliminar');
Route::get('/agregar_alimento','AlimentosController@mostrar_insertar');
Route::post('/Admin_alimentos_nuevo','AlimentosController@insertar')->name('Admin_alimentos_nuevo');


Route::get('/actualizar_alimento','AlimentosController@mostrar_actualizar');
Route::post('/Admin_alimentos_editar','AlimentosController@actualizar')->name('Admin_alimentos_editar');

/*ADMINISTRADOR CATEGORIA*/

Route::get('/admin_categoria','CategoriaController@categorias_mostrar');
Route::post('/Admin_categoria_borrar','CategoriaController@eliminar');
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*ADMINISTRADOR HORARIO*/
Route::get('/admin_horario','HorarioController@horario_mostrar');
Route::post('/admin_horario_editar','HorarioController@actualizar');

/*ADMINISTRADOR METODO DE PAGO*/
Route::get('/admin_metodo_de_pago','Metodo_de_pagoController@metodo_pago_mostrar');
Route::post('/admin_metodo_de_pago_eliminar','Metodo_de_pagoController@eliminar');
Route::post('/Admin_metodo_de_pago_insertar','Metodo_de_pagoController@insertar');
Route::post('/Admin_metodo_de_pago_actualizar','Metodo_de_pagoController@actualizar');

/*ADMINISTRADOR PRODUCTO*/

Route::get('/admin_producto','ProductoController@productos_mostrar');
Route::post('/Admin_producto_borrar','ProductoController@eliminar');
Route::post('/Admin_producto_nuevo','ProductoController@insertar');
Route::post('/Admin_producto_editar','ProductoController@actualizar');