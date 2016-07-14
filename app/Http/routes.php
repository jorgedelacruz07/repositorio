<?php

Route::get('/', 'ControladorUsuario@getlogin');
Route::get('login', 'ControladorUsuario@getlogin');
Route::post('login', 'ControladorUsuario@postlogin');

Route::get('registro', 'ControladorUsuario@getregistro');
Route::post('registro', 'ControladorUsuario@postregistro');

Route::get('perfil', function(){
	return view('login')
	->with("msj","");
});

Route::post('perfil', 'ControladorUsuario@postlogin');

Route::get('busqueda', 'ControladorUsuario@busqueda');

Route::get('documentos', 'ControladorDocumento@ver');
Route::get('documentos/{id}','ControladorDocumento@archivo');
Route::get('documentos/tipo/{id}','ControladorDocumento@tipo');
Route::get('documentos/curso/{id}','ControladorDocumento@curso');

Route::get('subir', 'ControladorDocumento@subir');
Route::post('subir', 'ControladorDocumento@agregar');

Route::get('descargar_archivo/{id}','ControladorDocumento@descargar');

Route::get('datawarehouse', function (){
	return view('datawarehouse');
});

?>