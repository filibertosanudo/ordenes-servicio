@extends('layouts.app')

@section('title', 'Órdenes')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Órdenes</h1>

    <div class="row mb-3 align-items-center">
        <div class="col-12 col-md-auto">
            <a href="{{ route('ordenes.create') }}" class="btn btn-primary">Nueva Orden</a>
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

    @if($ordenes->isEmpty())
        <div class="alert alert-info">
            No hay órdenes registradas.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ordenes as $orden)
                        <tr>
                            <td>{{ $orden->id }}</td>
                            <td>{{ $orden->cliente->nombre ?? 'Cliente eliminado'}}</td>
                            <td>{{ $orden->fecha }}</td>
                            <td>{{ ucfirst($orden->estatus) }}</td>
                            <td>
                                ${{ number_format($orden->detalles->sum('subtotal'), 2) }}
                            </td>
                            <td>
                                <a href="{{ route('ordenes.show', $orden->id) }}" class="btn btn-info btn-sm" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('ordenes.edit', $orden->id) }}" class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('ordenes.destroy', $orden->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que deseas eliminar esta orden?')"
                                            title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                @if($orden->trashed())
                                    <form action="{{ route('ordenes.restore', $orden->id) }}" method="POST" style="display:inline;">
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
            {{ $ordenes->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
