<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::all();
        return response()->json($sellers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $seller = Seller::create($request->all());
        return response()->json([
            'mensaje' => 'Vendedor creado exitosamente',
            'seller' => $seller
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        return response()->json($seller);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller)
    {
        $seller->update($request->all());
        return response()->json([
            'mensaje' => 'Vendedor actualizado exitosamente',
            'seller' => $seller
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller)
    {
        $seller->delete();
        return response()->json([
            'mensaje' => 'Vendedor eliminado exitosamente'
        ]);
    }
}
