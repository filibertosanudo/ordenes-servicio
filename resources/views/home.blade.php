@extends('layouts.app')

@section('title', 'Inicio - Sistema de Órdenes')

@section('content')
    <h1 class="text-center">Bienvenido al Sistema de Órdenes</h1>

    <!-- Grid Responsivo -->
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Mantenimiento">
                <div class="card-body">
                    <h5 class="card-title">Mantenimiento</h5>
                    <p class="card-text">Realiza un mantenimiento general a tu vehículo.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Reparación">
                <div class="card-body">
                    <h5 class="card-title">Reparación de Motor</h5>
                    <p class="card-text">Diagnóstico y reparación de fallas en el motor.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Limpieza">
                <div class="card-body">
                    <h5 class="card-title">Limpieza Profunda</h5>
                    <p class="card-text">Limpieza interior y exterior de tu vehículo.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
