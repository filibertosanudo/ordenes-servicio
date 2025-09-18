@extends('layouts.app')

@section('title', 'Detalles de Órdenes')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalles de Órdenes</h1>

    @if($ordenes->isEmpty())
        <div class="alert alert-info">No hay órdenes registradas.</div>
    @else
        <div class="row g-4">
            @foreach($ordenes as $orden)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm" style="min-height: 300px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            Orden #{{ $orden->id }}
                        </h5>
                        <p class="card-text mb-1">
                            <strong>Cliente:</strong> {{ $orden->cliente->nombre ?? '—' }}
                        </p>
                        <p class="card-text mb-3">
                            <strong>Fecha:</strong> {{ $orden->fecha }}
                        </p>

                        <h6 class="mt-2">Servicios:</h6>
                        <ul class="list-group list-group-flush mb-3 flex-grow-1">
                            @foreach($orden->detalles->take(2) as $detalle)
                                <li class="list-group-item py-2">
                                    {{ $detalle->servicio->nombre ?? 'Servicio eliminado' }}
                                    <span class="badge bg-secondary float-end">
                                        x{{ $detalle->cantidad }}
                                    </span>
                                </li>
                            @endforeach

                            @if($orden->detalles->count() > 2)
                                <li class="list-group-item text-center text-muted py-2">
                                    +{{ $orden->detalles->count() - 2 }} más
                                </li>
                            @endif

                            @for($i = $orden->detalles->count(); $i < 2; $i++)
                                <li class="list-group-item py-2" style="visibility: hidden;">placeholder</li>
                            @endfor
                        </ul>

                       <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('detalles.show', $orden->id) }}" class="btn btn-primary btn-sm me-auto">
                                Ver más
                            </a>
                            <div class="d-flex gap-2">
                                <a href="{{ route('ordenes.edit', ['orden' => $orden->id, 'from' => 'detalles']) }}"
                                class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('ordenes.destroy', ['orden' => $orden->id, 'from' => 'detalles']) }}"
                                    method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que deseas eliminar esta orden?')" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
