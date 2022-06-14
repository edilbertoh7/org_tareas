<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\TareasController;

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

//Route::get('hola',[PrimerController::class,'index'])->name('hola');
Route::get('tarea/registrar',[TareasController::class,'create'])->name('tarea.create');
Route::post('tarea/guardar',[TareasController::class,'store'])->name('tarea.store');
