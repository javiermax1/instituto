<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Mi primeras rutas: --> 1er param es la ruta es la función.
// Usando una función
Route::get('/saludos', function () {
    return 'Hola mundo';
});
// usando una función flecha:
Route::get ('/saludar', fn () => view('saludar'));

// rutas con view() versión  corta, solo para solicitudes get:
Route::view('/', 'main');
Route::view('about', 'about');
Route::view('alumnos', 'alumnos');
Route::view('noticias', 'noticias');
