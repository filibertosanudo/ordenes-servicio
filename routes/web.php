<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', ClienteController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('ordenes', OrdenController::class);
Route::resource('detalles', DetalleOrdenController::class);
