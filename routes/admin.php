<?php

use App\Http\Controllers\Admin\ArticuloController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\MarcaController;
use Illuminate\Support\Facades\Route;

Route::view('', 'admin.index')->name('admin.home');

Route::resource('fotos', FotoController::class)->names('admin.fotos');
Route::resource('marcas', MarcaController::class)->names('admin.marcas');
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');
Route::resource('articulos', ArticuloController::class)->names('admin.articulos');