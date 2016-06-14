<?php

Route::get('/', 'ControladorUsuario@index');
// Route::get('login', 'ControladorUsuario@index');



Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('registro', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


Route::post('perfil', 'ControladorUsuario@login');

Route::get('/cursos', function () {
    return view('cursos');
});


Route::get('recientes', 'ControladorDocumento@ver');


Route::get('subir', 'ControladorDocumento@subir');
Route::post('subir', 'ControladorDocumento@agregar');

// Route::get('descargar_archivo/{id}','ControladorDocumento@descargar');
Route::get('descargar_archivo','ControladorDocumento@descargar');

?>