<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'tienda')->name('tienda');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contactanos', 'contactanos')->name('contactanos');

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
