<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\PlataformasController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias', CategoriasController::class);
Route::resource('juegos', JuegosController::class);
Route::resource('plataformas', PlataformasController::class);