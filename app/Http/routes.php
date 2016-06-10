<?php

Route::get('/', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::post('/perfil', 'ControladorUsuarios@login');

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/subir', function () {
    return view('subir');
});

Route::get('/recientes', function () {
    return view('recientes');
});

Route::post('agregarBibliografia', 'ControladorBibliografia@agregar');

?>