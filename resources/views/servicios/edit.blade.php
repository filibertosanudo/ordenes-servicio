@extends('layouts.app')

@section('title', 'Editar Servicio')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Editar Servicio</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                       id="nombre" name="nombre" value="{{ old('nombre', $servicio->nombre) }}">
                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control @error('descripcion') is-invalid @enderror"
                          id="descripcion" name="descripcion">{{ old('descripcion', $servicio->descripcion) }}</textarea>
                @error('descripcion')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control @error('precio') is-invalid @enderror"
                       id="precio" name="precio" value="{{ old('precio', $servicio->precio) }}">
                @error('precio')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Guardar</button>
            <a href="{{ route('servicios.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver</a>
        </form>
    </div>
</div>
@endsection
