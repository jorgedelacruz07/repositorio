<?php

Route::get('/', 'ControladorUsuario@index');
Route::get('login', 'ControladorUsuario@index');
// Route::post('login', 'ControladorUsuario@registrar');

Route::get('registro', function(){
	return view('registro');
});

Route::get('perfil', function(){
	return view('login')
	->with("msj","");
});

Route::post('perfil', 'ControladorUsuario@login');

Route::get('cursos', 'ControladorUsuario@cursos');

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