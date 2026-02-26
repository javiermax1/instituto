<?php

// Namespace con la ruta completa de la clase hay que referenciar todas
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta controladora de la clase Controller MainController
// 'main' -> alude al nombre del métod en el controlador
//Route::get('/', [MainController::class, 'main'])->name('main');


Route::view("noticias","noticias" )->name("noticias");
Route::view("alumnos","alumnos" )->name("alumnos");
Route::view("profesores","profesores" )->name("profesores");
//Route::view("/","main" )->name("main");
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

/*Route::get ("/profesores/{param}/{seccion}",
    fn($num_prof, $section) =>
    view("profesores", ["param" => $num_prof, "seccion" => $section])
);*/

/*
Route::delete ("/profesores/{param}/{seccion}",);
Route::post ("/profesores/{param}/{seccion}",);
Route::patch ("/profesores/{param}/{seccion}",);
Route::middleware();
*/



Route::get ("/",[MainController::class, "main"])->name("main");


require __DIR__.'/auth.php';
// Pagina noe existe
// Url completa
Route::fallback(function () {
    $nombre = request()->url();
    return view('404');
});

// Path -> nombre del recurso
Route::fallback(function () {
    $nombre = request()->path();
    return view('404');
});
