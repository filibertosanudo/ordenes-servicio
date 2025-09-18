@extends('layouts.app')

@section('title', 'Detalles del Cliente')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detalles del Cliente</h4>
    </div>
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>

    <a href="{{ route('clientes.index') }}" class="btn btn-secondary" title="Volver">
        <i class="bi bi-arrow-left"></i>
    </a>
    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning" title="Editar">
        <i class="bi bi-pencil-square"></i>
    </a>
    </div>
</div>
@endsection
