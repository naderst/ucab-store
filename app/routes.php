<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
    Rutas de datos
*/
Route::group(array('prefix' => 'api'), function()
{
    /*
        Rutas para controlador de Zapatos
    */
    
    Route::get('zapatos', 'ZapatosController@index');
    Route::get('zapatos/{id}', 'ZapatosController@ver');
    Route::get('zapatos/{id}/comentarios', 'ZapatosController@comentarios');
    Route::post('zapatos/{id}/comentarios', 'ZapatosController@guardarComentario');
    
    /*
        Rutas para controlador de Comentarios
    */
    
    Route::delete('comentarios/{id}', 'ComentariosController@eliminar');
});

/*
    Rutas de templates
*/
Route::group(array('prefix' => 'tpl'), function()
{
    /*
        Rutas para templates de zapatos
    */
    Route::get('index', function()
    {
        return View::make('templates.index');
    });

    Route::get('zapato', function()
    {
        return View::make('templates.zapato');
    });
});

/*
    Ruta por defecto
*/
App::missing(function() {
    return View::make('layout');
});