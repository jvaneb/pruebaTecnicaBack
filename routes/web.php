<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudiantesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/listar', [EstudiantesController::class, 'listar']);
// Route::post('/crear', [EstudiantesController::class, 'crear']);
// Route::post('/actualizar', [EstudiantesController::class, 'actualizar']);
// Route::post('/estado', [EstudiantesController::class, 'cambiarEstado']);