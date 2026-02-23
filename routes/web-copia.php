<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('saludar', function(){
//    return view('saludar');
//} );
Route::get('saludar_url', fn()=> view('saludar'));


Route::view("saludar_1","saludar" );

Route::view("saludar_2","saludar" );
Route::view("about","about" );
Route::view("noticias","noticias" );
Route::view("alumnos","alumnos" );
Route::view("profesores","profesores" );
Route::view("/","main" );
Route::view("about","about" );
//Route::get("about", fn()=> view('about'));
//Rout::get("about", function(){
//    return view('about');
//});



