<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('tienda', [HomeController::class, 'tienda'])->name('tienda');
Route::get('articulo/{articulo}', [HomeController::class, 'show'])->name('articulos.show');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::get('categoria/{categoria}', [HomeController::class, 'categoria'])->name('articulos.categoria');
Route::get('marca/{marca}', [HomeController::class, 'marca'])->name('articulos.marca');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
