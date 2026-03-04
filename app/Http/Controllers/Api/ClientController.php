<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return response()->json([
            'mensaje' => 'Cliente creado exitosamente',
            'client' => $client
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return response()->json($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return response()->json([
            'mensaje' => 'Cliente actualizado exitosamente',
            'client' => $client
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json([
            'mensaje' => 'Cliente eliminado exitosamente'
        ]);
    }
}
