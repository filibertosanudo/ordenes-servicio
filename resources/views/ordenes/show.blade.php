@extends('layouts.app')

@section('title', 'Detalles de Orden')

@section('content')
<div class="container">
    <h1 class="mb-4">Orden #{{ $orden->id }}</h1>

    <div class="mb-3"><strong>Cliente:</strong> {{ $orden->cliente?->nombre ?? 'Cliente eliminado' }}</div>
    <div class="mb-3"><strong>Fecha:</strong> {{ $orden->fecha }}</div>
    <div class="mb-3"><strong>Estatus:</strong> {{ ucfirst($orden->estatus) }}</div>

    <h5>Servicios</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($orden->detalles as $detalle)
                <tr>
                    <td>{{ $detalle->servicio->nombre ?? 'Servicio eliminado'}}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>${{ number_format($detalle->subtotal, 2) }}</td>
                </tr>
                @php $total += $detalle->subtotal; @endphp
            @endforeach
            <tr>
                <td colspan="2"><strong>Total</strong></td>
                <td><strong>${{ number_format($total, 2) }}</strong></td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('ordenes.index') }}" class="btn btn-secondary" title="Volver">
        <i class="bi bi-arrow-left"></i>
    </a>
    <a href="{{ route('ordenes.edit', $orden->id) }}" class="btn btn-warning" title="Editar">
        <i class="bi bi-pencil-square"></i>
    </a>
</div>
@endsection
