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
Route::resource('detalles', DetalleOrdenController::class);

Route::get('ordenes', [OrdenController::class, 'index'])->name('ordenes.index');
Route::get('ordenes/create', [OrdenController::class, 'create'])->name('ordenes.create');
Route::post('ordenes', [OrdenController::class, 'store'])->name('ordenes.store');
Route::get('ordenes/{orden}', [OrdenController::class, 'show'])->name('ordenes.show');
Route::get('ordenes/{orden}/edit', [OrdenController::class, 'edit'])->name('ordenes.edit');
Route::put('ordenes/{orden}', [OrdenController::class, 'update'])->name('ordenes.update');
Route::delete('ordenes/{orden}', [OrdenController::class, 'destroy'])->name('ordenes.destroy');
