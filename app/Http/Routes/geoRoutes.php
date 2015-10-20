<?php

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
        Route::match(['get', 'post'],
            '/provincias/search',
            'provinciasController@search');
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
