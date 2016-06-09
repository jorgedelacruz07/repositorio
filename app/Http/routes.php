<?php

Route::get('/', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::post('/perfil', 'UserController@identificar');

?>