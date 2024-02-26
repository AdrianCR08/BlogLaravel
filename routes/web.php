<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', HomeController::class);


// Grupo de rutas

Route::controller(CursoController::class) -> group(function(){
    Route::get('cursos', 'index');

    Route::get('cursos/create', 'create');

    Route::get('cursos/{curso}', 'show');

});



// ruta opcional, si no se pasa el valor de la categoria, su valor será null.
// En cambio si por la URL se pasa una categoria la variable tomará ese valor

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if ($categoria) {
        return "Bienvendio al curso $curso de la categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
}); */

/* 
Con laravel 7 si querias llamar a un controlador se hacia de la siguinete manera:
Route::get('/', 'HomeController');

Mientras que las rutas que incluian un método
Route::get('cursos', 'CursoController@index');

La principal razon de este cambio es por que al definirlo de esa manera podria acceder facilmente a ese controlador.

*/
