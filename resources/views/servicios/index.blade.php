@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Servicios</h1>
    <div class="row mb-3 align-items-center">
        <div class="col-12 col-md-auto">
            <a href="{{ route('servicios.create') }}" class="btn btn-primary">Nuevo Servicio</a>
        </div>
        <div class="col-12 col-md d-flex justify-content-md-end mt-2 mt-md-0">
            <form method="GET" class="d-flex align-items-center">
                <div class="form-check me-2">
                    <input class="form-check-input" type="checkbox" name="eliminados" id="eliminados"
                        value="1" {{ request('eliminados') ? 'checked' : '' }}>
                    <label class="form-check-label" for="eliminados">
                        Mostrar eliminados
                    </label>
                </div>
                <button type="submit" class="btn btn-secondary btn-sm">Filtrar</button>
            </form>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($servicios->isEmpty())
        <div class="alert alert-info">
            No hay servicios registrados.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $servicio)
                        <tr>
                            <td>{{ $servicio->id }}</td>
                            <td>{{ $servicio->nombre }}</td>
                            <td>{{ $servicio->descripcion }}</td>
                            <td>${{ number_format($servicio->precio, 2) }}</td>
                            <td>
                                <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-info btn-sm" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que deseas eliminar este servicio?')"
                                            title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                @if($servicio->trashed())
                                    <form action="{{ route('servicios.restore', $servicio->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm" title="Restaurar">
                                            <i class="bi bi-arrow-counterclockwise"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $servicios->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
