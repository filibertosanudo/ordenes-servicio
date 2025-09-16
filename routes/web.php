<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\DetalleOrdenController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::resource('clientes', ClienteController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('ordenes', OrdenController::class);
Route::resource('detalles', DetalleOrdenController::class);
