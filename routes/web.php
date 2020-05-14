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
    return view('Principal');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Ingresar', function () {
    return view('Ingresar');
});
Route::get('/Registrar', function () {
    return view('Registrar');
});

Route::get('/Contactenos', function () {
    return view('Contactenos');
});


Route::get('/Principal', function () {
    return view('Principal');
});
Route::get('/RegistrarTrabajador', function () {
    return view('RegistrarTrabajador');
});
Route::get('/RegistroProducto', function () {
    return view('RegistroProducto');
});
Route::get('/RegistroInsumo', function () {
    return view('RegistroInsumo');
});

Route::get('/TablaTrabajador', function () {
    return view('TablaTrabajador');
});
Route::get('/TablaProducto', function () {
    return view('TablaProducto');
});
Route::get('/TablaInsumo', function () {
    return view('TablaInsumo');
});
//Controlador del modelo de la base de datos con ORM

Route::get('/insumo','ControlGeneral@insumo');
Route::get('/trabajadores','ControlGeneral@trabajadores');
Route::get('/produccion','ControlGeneral@produccion');
