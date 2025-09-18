@extends('layouts.app')

@section('title', 'Editar Orden')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Orden #{{ $orden->id }}</h1>

    <form action="{{ route('ordenes.update', $orden->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="from" value="{{ request('from') }}">

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-select @error('cliente_id') is-invalid @enderror">
                <option value="">Seleccione un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $orden->cliente_id == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nombre }}
                    </option>
                @endforeach
            </select>
            @error('cliente_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ $orden->fecha }}">
            @error('fecha')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="estatus" class="form-label">Estatus</label>
            <select name="estatus" id="estatus" class="form-select">
                @foreach(['pendiente','en proceso','completada'] as $estatus)
                    <option value="{{ $estatus }}" {{ $orden->estatus == $estatus ? 'selected' : '' }}>
                        {{ ucfirst($estatus) }}
                    </option>
                @endforeach
            </select>
        </div>

        <hr>

        <h4>Servicios</h4>
        <div id="servicios-container">
            @foreach($orden->detalles as $detalle)
            <div class="row mb-2 servicio-item">
                <div class="col-md-6">
                    <select name="servicios[]" class="form-select">
                        <option value="">Seleccione un servicio</option>
                        @foreach($servicios as $servicio)
                            <option value="{{ $servicio->id }}" {{ $detalle->servicio_id == $servicio->id ? 'selected' : '' }}>
                                {{ $servicio->nombre }} (${{ $servicio->precio }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="number" name="cantidades[]" class="form-control" value="{{ $detalle->cantidad }}" min="1">
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-danger btn-sm remove-servicio">Eliminar</button>
                </div>
            </div>
            @endforeach
        </div>

        <button type="button" class="btn btn-secondary mb-3" id="add-servicio">Agregar Servicio</button>

        <div class="mb-3">
            <strong>Total: $<span id="total">0.00</span></strong>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ request('from') === 'detalles' ? route('detalles.index') : route('ordenes.index') }}"
        class="btn btn-secondary">
            Cancelar
        </a>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('servicios-container');
    const addBtn = document.getElementById('add-servicio');

    function actualizarTotal() {
        let total = 0;
        container.querySelectorAll('.servicio-item').forEach(item => {
            const select = item.querySelector('select');
            const cantidad = parseFloat(item.querySelector('input').value) || 0;
            const precio = parseFloat(select.selectedOptions[0]?.text.match(/\$(\d+(\.\d+)?)/)[1]) || 0;
            total += precio * cantidad;
        });
        document.getElementById('total').innerText = total.toFixed(2);
    }

    addBtn.addEventListener('click', () => {
        const firstItem = container.querySelector('.servicio-item');
        const newItem = firstItem.cloneNode(true);
        newItem.querySelector('select').value = '';
        newItem.querySelector('input').value = 1;
        container.appendChild(newItem);
        actualizarTotal();
    });

    container.addEventListener('click', e => {
        if(e.target.classList.contains('remove-servicio')){
            if(container.querySelectorAll('.servicio-item').length > 1){
                e.target.closest('.servicio-item').remove();
                actualizarTotal();
            }
        }
    });

    container.addEventListener('change', actualizarTotal);
    actualizarTotal();
});
</script>
@endsection
