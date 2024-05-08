<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perro-y-gato', function () {
    return view('perro-y-gato');
});

Route::get('/otras-mascotas', function () {
    return view ('otras-mascotas');
});

Route::get('/peluqueria-canina', function () {
    return view ('peluqueria-canina');
});

Route::get('/novedades', function () {
    return view ('novedades');
});

Route::get('/ofertas', function () {
    return view ('ofertas');
});

Route::get('/adopciones', function () {
    return view ('adopciones');
});