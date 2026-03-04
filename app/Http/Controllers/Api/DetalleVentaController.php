<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalles = DetalleVenta::all();
        return response()->json($detalles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detalle = DetalleVenta::create($request->all());
        return response()->json([
            'mensaje' => 'Detalle de venta creado exitosamente',
            'detalle' => $detalle
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DetalleVenta $detalleVenta)
    {
        return response()->json($detalleVenta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetalleVenta $detalleVenta)
    {
        $detalleVenta->update($request->all());
        return response()->json([
            'mensaje' => 'Detalle de venta actualizado exitosamente',
            'detalle' => $detalleVenta
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetalleVenta $detalleVenta)
    {
        $detalleVenta->delete();
        return response()->json([
            'mensaje' => 'Detalle de venta eliminado exitosamente'
        ]);
    }
}
