<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lots = Lot::all();
        return response()->json($lots);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lot = Lot::create($request->all());
        return response()->json([
            'mensaje' => 'Lote creado exitosamente',
            'lot' => $lot
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lot $lot)
    {
        return response()->json($lot);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lot $lot)
    {
        $lot->update($request->all());
        return response()->json([
            'mensaje' => 'Lote actualizado exitosamente',
            'lot' => $lot
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lot $lot)
    {
        $lot->delete();
        return response()->json([
            'mensaje' => 'Lote eliminado exitosamente'
        ]);
    }
}
