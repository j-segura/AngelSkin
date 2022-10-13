<?php

use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\MarcaController;
use Illuminate\Support\Facades\Route;

Route::view('', 'admin.index')->name('admin.home');

Route::resource('fotos', FotoController::class)->names('admin.fotos');
Route::resource('marcas', MarcaController::class)->names('admin.marcas');