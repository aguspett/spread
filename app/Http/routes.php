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
// Authentication routes...

Route::get('/',
    'Auth\AuthController@getLogin');
Route::get('auth/login',
    [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'login'
    ]);
Route::post('auth/login',
    'Auth\AuthController@postLogin');
Route::get('auth/logout',
    [
        'uses' => 'Auth\AuthController@getLogout',
        'as' => 'logout'
    ]);
// Registration routes...
Route::get('auth/register',
    [
        'uses' => 'Auth\AuthController@getRegister',
        'as' => 'regsiter'
    ]);
Route::post('auth/register',
    'Auth\AuthController@postRegister');
Route::get('/home',
    [
        'as' => 'users',
        'uses' => 'homeController@index'
    ]);

Route::get('/geo', [
    'as' => 'geo',
    'uses' => 'geoController@index'
]);
Route::group(['prefix' => 'geo'],
    function () {
        Route::get('/pais',
            [
                'as' => 'pais',
                'uses' => 'paisesController@index'
            ]);
        Route::resource('pais',
            'paisesController');
        Route::get('/provincias/list/{id}',
            'provinciasController@getList');
        Route::resource('pais.provincia',
            'provinciasController');
        Route::get('/partidos/list/{id}',
            'provinciasController@List');
        Route::resource('pais.provincia.partido',
            'partidosController');
        Route::get('/ciudades/list/{id}',
            'provinciasController@List');
        Route::resource('ciudad',
            'ciudadesController');
    });
Route::resource('clientes',
    'clientesController');



