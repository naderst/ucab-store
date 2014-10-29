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

Route::get('/', function()
{
	return View::make('layout');
});

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