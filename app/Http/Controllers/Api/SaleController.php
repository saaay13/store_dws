<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return response()->json($sales);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale = Sale::create($request->all());
        return response()->json([
            'mensaje' => 'Venta creada exitosamente',
            'sale' => $sale
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return response()->json($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());
        return response()->json([
            'mensaje' => 'Venta actualizada exitosamente',
            'sale' => $sale
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return response()->json([
            'mensaje' => 'Venta eliminada exitosamente'
        ]);
    }
}
