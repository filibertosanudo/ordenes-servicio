@extends('layouts.app')

@section('title', 'Detalles del Servicio')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detalles del Servicio</h4>
    </div>
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $servicio->nombre }}</p>
        <p><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
        <p><strong>Precio:</strong> ${{ number_format($servicio->precio, 2) }}</p>

        <a href="{{ route('servicios.index') }}" class="btn btn-secondary" title="Volver">
            <i class="bi bi-arrow-left"></i>
        </a>
        <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning" title="Editar">
            <i class="bi bi-pencil-square"></i>
        </a>
    </div>
</div>
@endsection
