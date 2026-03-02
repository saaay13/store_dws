<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cliente creado individualmente referenciando al ID del usuario creado en DatabaseSeeder
        Client::create([
            'user_id' => 3, // ID de 'Maria Cliente'
            'puntos' => 50,
        ]);
    }
}
