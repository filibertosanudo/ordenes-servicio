<?php

namespace App\Http\Controllers;

use App\Models\DetalleOrden;
use App\Models\Orden;
use Illuminate\Http\Request;

class DetalleOrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordenes = Orden::with(['cliente', 'detalles.servicio'])->paginate(9);
        return view('detalles.index', compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orden $detalle)
    {
        $detalle->load('cliente', 'detalles.servicio');

        return view('detalles.show', ['detalle' => $detalle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetalleOrden $detalleOrden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orden $orden)
    {
        $orden->update($request->all());

        if ($request->has('from') && $request->from === 'detalles') {
            return redirect()->route('detalles.index')
                            ->with('success', 'Orden actualizada correctamente desde detalles.');
        }

        return redirect()->route('ordenes.index')
                        ->with('success', 'Orden actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetalleOrden $detalleOrden)
    {
        //
    }

    public function restore($id)
    {
        $orden = Orden::withTrashed()->findOrFail($id);
        $orden->restore();

        foreach ($orden->detalles()->withTrashed()->get() as $detalle) {
            $detalle->restore();
        }

        return redirect()->route('ordenes.index')->with('success', 'Orden restaurada correctamente.');
    }
}
