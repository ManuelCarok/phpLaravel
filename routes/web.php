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
//ruta return un string
Route::get('/miruta', function () {
    return 'Hola Mundo!, mi primera ruta.';
});
//ruta return un string con parametros obligatorios
Route::get('/parametros/{name}/{lastname}', function ($name, $lastname) {
    return 'Hola me llamo '.$name.' '.$lastname;
});
//ruta return un string con parametros opcionales
Route::get('/opcional/{name}/{lastname?}', function ($name, $lastname = null) {
    return 'Hola me llamo '.$name.' '.$lastname;
});

Route::get('/controlador/{name}', 'PruebaController@prueba');