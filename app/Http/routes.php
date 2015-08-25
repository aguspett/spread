<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('/home',function (){
    return view('home');
});

Route::resource('paises','paisesController');
Route::post('paises/show','paisesController@show');
Route::resource('provincias','provinciasController');

Route::resource('partidos','partidosController');
Route::resource('ciudades','ciudadesController');
Route::resource('clientes','clientesController');
