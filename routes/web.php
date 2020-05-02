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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Ingresar', function () {
    return view('Ingresar');
});
Route::get('/Registrar', function () {
    return view('Registrar');
});
Route::get('/Informacion', function () {
    return view('Informacion');
});
Route::get('/Contactenos', function () {
    return view('Contactenos');
});
Route::get('/Sugerencias', function () {
    return view('Sugerencias');
});

//Controlador del modelo de la base de datos con ORM
Route::get('/usuario','ControlGeneral@usuario');
Route::get('/insumo','ControlGeneral@insumo');
Route::get('/trabajadores','ControlGeneral@trabajadores');
Route::get('/produccion','ControlGeneral@produccion');
Route::get('/contabilidadProduccion','ControlGeneral@contabilidadProduccion');
Route::get('/contabilidadInsumo','ControlGeneral@contabilidadInsumo');
Route::get('/contabilidadTrabajadores','ControlGeneral@contabilidadTrabajadores');
