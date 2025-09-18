@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Editar Cliente</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text"
                       name="nombre"
                       id="nombre"
                       class="form-control"
                       value="{{ old('nombre', $cliente->nombre) }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email"
                       name="email"
                       id="email"
                       class="form-control"
                       value="{{ old('email', $cliente->email) }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text"
                       name="telefono"
                       id="telefono"
                       class="form-control"
                       value="{{ old('telefono', $cliente->telefono) }}"
                       required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
