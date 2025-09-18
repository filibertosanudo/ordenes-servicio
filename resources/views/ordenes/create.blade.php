@extends('layouts.app')

@section('title', 'Crear Orden')

@section('content')
<div class="container">
    <h1 class="mb-4">Crear Nueva Orden</h1>

    <form action="{{ route('ordenes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-select @error('cliente_id') is-invalid @enderror">
                <option value="">Seleccione un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
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
            <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', date('Y-m-d')) }}">
            @error('fecha')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="estatus" class="form-label">Estatus</label>
            <select name="estatus" id="estatus" class="form-select">
                @foreach(['pendiente','en proceso','completada'] as $estatus)
                    <option value="{{ $estatus }}" {{ old('estatus') == $estatus ? 'selected' : '' }}>
                        {{ ucfirst($estatus) }}
                    </option>
                @endforeach
            </select>
        </div>

        <hr>

        <h4>Servicios</h4>
        <div id="servicios-container">
            <div class="row mb-2 servicio-item">
                <div class="col-md-6">
                    <select name="servicios[]" class="form-select" required>
                        <option value="">Seleccione un servicio</option>
                        @foreach($servicios as $servicio)
                            <option value="{{ $servicio->id }}">{{ $servicio->nombre }} (${{ $servicio->precio }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="number" name="cantidades[]" class="form-control" value="1" min="1">
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-danger btn-sm remove-servicio">Eliminar</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary mb-3" id="add-servicio">Agregar Servicio</button>

        <div class="mb-3">
            <strong>Total: $<span id="total">0.00</span></strong>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('ordenes.index') }}" class="btn btn-secondary">Cancelar</a>
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
