<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetalleVenta;

class DetalleVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetalleVenta::create([
            'sale_id' => 1,
            'product_id' => 1,
            'cantidad' => 2,
            'subtotal' => 130.00,
        ]);

        DetalleVenta::create([
            'sale_id' => 1,
            'product_id' => 4,
            'cantidad' => 1,
            'subtotal' => 220.00,
        ]);

        DetalleVenta::create([
            'sale_id' => 2,
            'product_id' => 2,
            'cantidad' => 5,
            'subtotal' => 90.00,
        ]);

        DetalleVenta::create([
            'sale_id' => 2,
            'product_id' => 5,
            'cantidad' => 2,
            'subtotal' => 30.50,
        ]);
    }
}
