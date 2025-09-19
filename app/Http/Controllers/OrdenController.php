<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\DetalleOrden;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('eliminados')) {
            $ordenes = Orden::onlyTrashed()->with('cliente')->paginate(10);
        } else {
            $ordenes = Orden::with('cliente')->paginate(10);
        }
        return view('ordenes.index', compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $servicios = Servicio::all();
        return view('ordenes.create', compact('clientes', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'fecha' => 'required|date',
            'estatus' => 'required|in:pendiente,en proceso,completada',
            'servicios' => 'required|array|min:1',
            'servicios.*' => 'required|exists:servicios,id',
            'cantidades.*' => 'required|integer|min:1',
        ], [
            'servicios.required' => 'Debe seleccionar al menos un servicio.',
        ]);

        $orden = Orden::create([
            'cliente_id' => $request->cliente_id,
            'fecha' => $request->fecha,
            'estatus' => $request->estatus,
        ]);

        foreach ($request->servicios as $key => $servicio_id) {
            $cantidad = $request->cantidades[$key];
            $servicio = Servicio::findOrFail($servicio_id);
            $subtotal = $servicio->precio * $cantidad;

            DetalleOrden::create([
                'orden_id' => $orden->id,
                'servicio_id' => $servicio_id,
                'cantidad' => $cantidad,
                'subtotal' => $subtotal,
                'total' => $subtotal,
            ]);
        }

        return redirect()->route('ordenes.index')->with('success', 'Orden creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orden $orden)
    {
        $orden->load('cliente', 'detalles.servicio');
        return view('ordenes.show', compact('orden'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orden $orden)
    {
        $orden->load('detalles.servicio');
        $clientes = Cliente::all();
        $servicios = Servicio::all();
        return view('ordenes.edit', compact('orden', 'clientes', 'servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'fecha' => 'required|date',
            'estatus' => 'required|in:pendiente,en proceso,completada',
            'servicios.*' => 'required|exists:servicios,id',
            'cantidades.*' => 'required|integer|min:1',
        ]);

        $orden->update([
            'cliente_id' => $request->cliente_id,
            'fecha' => $request->fecha,
            'estatus' => $request->estatus,
        ]);

        $orden->detalles()->delete();

        $totalOrden = 0;
        foreach ($request->servicios as $key => $servicio_id) {
            $cantidad = $request->cantidades[$key];
            $servicio = Servicio::findOrFail($servicio_id);
            $subtotal = $servicio->precio * $cantidad;
            $totalOrden += $subtotal;

            DetalleOrden::create([
                'orden_id' => $orden->id,
                'servicio_id' => $servicio_id,
                'cantidad' => $cantidad,
                'subtotal' => $subtotal,
                'total' => $subtotal,
            ]);
        }

        if ($request->from === 'detalles') {
            return redirect()->route('detalles.index')
                            ->with('success', 'Orden actualizada correctamente desde Detalles.');
        }

        return redirect()->route('ordenes.index')
                        ->with('success', 'Orden actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Orden $orden)
    {
        $orden->detalles()->delete();
        $orden->delete();

        if ($request->query('from') === 'detalles') {
            return redirect()->route('detalles.index')
                            ->with('success', 'Orden eliminada correctamente desde Detalles.');
        }

        return redirect()->route('ordenes.index')
                        ->with('success', 'Orden eliminada correctamente.');
    }

    public function restore($id)
    {
        $orden = Orden::withTrashed()->findOrFail($id);
        $orden->restore();
        return redirect()->route('ordenes.index')->with('success', 'Orden restaurada correctamente.');
    }
}
