<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;

// Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// CRUD Espacios
Route::resource('espacios', EspacioController::class);

// CRUD Reservas
Route::resource('reservas', ReservaController::class);
