@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo Cliente</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminarlo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">No hay clientes registrados</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
