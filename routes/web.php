<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/tienda', 'articulos.tienda')->name('tienda');

/* Route::view('/entrar', 'auth.entrar')->name('entrar');
Route::view('/registro', 'auth.registro')->name('registro'); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
