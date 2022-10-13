<?php

use App\Http\Controllers\Admin\FotoController;
use Illuminate\Support\Facades\Route;

Route::view('', 'admin.index')->name('admin.home');

Route::resource('fotos', FotoController::class)->names('admin.fotos');