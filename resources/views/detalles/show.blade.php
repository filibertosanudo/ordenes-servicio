@extends('layouts.app')

@section('title', 'Orden Detallada')

@section('content')
<div class="container">
    <h1 class="mb-4">Orden #{{ $detalle->id }}</h1>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Cliente:</strong> {{ $detalle->cliente->nombre }}</p>
            <p><strong>Fecha:</strong> {{ $detalle->fecha }}</p>
            <p>
                <strong>Estatus:</strong>
                <span class="badge
                    @if($detalle->estatus === 'pendiente') bg-warning
                    @elseif($detalle->estatus === 'en proceso') bg-info
                    @else bg-success @endif">
                    {{ ucfirst($detalle->estatus) }}
                </span>
            </p>
        </div>
    </div>

    <h4>Servicios contratados</h4>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detalle->detalles as $det)
            <tr>
                <td>{{ $det->servicio->nombre }}</td>
                <td>{{ $det->cantidad }}</td>
                <td>${{ number_format($det->servicio->precio, 2) }}</td>
                <td>${{ number_format($det->subtotal, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-end">Total</th>
                <th>${{ number_format($detalle->detalles->sum('subtotal'), 2) }}</th>
            </tr>
        </tfoot>
    </table>

    <div class="mt-3">
        <a href="{{ route('detalles.index') }}" class="btn btn-secondary" title="Volver">
            <i class="bi bi-arrow-left"></i>
        </a>
        <a href="{{ route('ordenes.edit', $detalle->id) }}" class="btn btn-warning" title="Editar">
            <i class="bi bi-pencil-square"></i>
        </a>
    </div>
</div>
@endsection
