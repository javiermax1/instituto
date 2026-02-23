<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::view("noticias","noticias" )->name("noticias");
Route::view("alumnos","alumnos" )->name("alumnos");
Route::view("profesores","profesores" )->name("profesores");
Route::view("/","main" )->name("main");
Route::view("about","about" )->name("about");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Pruebas: Rutas parametrizadas:
//
// Ejemplo más sencillo sin el view que te manda a la vista pagina.blade.php
//Route::get ("/alumno/{pepito}/{seccion}",
//    fn($numero_alumno, $zona) =>
//    "<h1>alumno numero $numero_alumno, $zona</h1>");


// Ejemplo algo más completo con view que te manda a la página profesor un parámetro numero
// Resultado: http://127.0.0.1:8000/profesor/4
// Resultado: http://127.0.0.1:8000/profesor/25
Route::get ("/profesor/{maestro}",
    fn($num_profesor) =>
    view("profesor", ["numero" => $num_profesor])
);

// Ejemplo algo más completo con view que te manda a la página alumno un parámetro numero
// Resultado: http://127.0.0.1:8000/alumno/4
// Resultado: http://127.0.0.1:8000/alumno/25
Route::get ("/alumno/{numero}",
    fn($numero_alumno) =>
    view("alumno", ["numero" => $numero_alumno])
);

Route::get ("/profesores/{param}",
    fn($num_prof) =>
    view("profesores", ["param" => $num_prof])
);




require __DIR__.'/auth.php';
