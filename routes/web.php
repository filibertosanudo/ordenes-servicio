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
Route::post('clientes/{id}/restore', [ClienteController::class, 'restore'])->name('clientes.restore');

Route::resource('servicios', ServicioController::class);
Route::post('servicios/{id}/restore', [ServicioController::class, 'restore'])->name('servicios.restore');

Route::resource('detalles', DetalleOrdenController::class)->only(['index', 'show']);

Route::get('ordenes', [OrdenController::class, 'index'])->name('ordenes.index');
Route::get('ordenes/create', [OrdenController::class, 'create'])->name('ordenes.create');
Route::post('ordenes', [OrdenController::class, 'store'])->name('ordenes.store');
Route::get('ordenes/{orden}', [OrdenController::class, 'show'])->name('ordenes.show');
Route::get('ordenes/{orden}/edit', [OrdenController::class, 'edit'])->name('ordenes.edit');
Route::put('ordenes/{orden}', [OrdenController::class, 'update'])->name('ordenes.update');
Route::delete('ordenes/{orden}', [OrdenController::class, 'destroy'])->name('ordenes.destroy');
Route::post('ordenes/{id}/restore', [OrdenController::class, 'restore'])->name('ordenes.restore');
