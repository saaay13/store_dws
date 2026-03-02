<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lot;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lot::create([
            'product_id' => 1,
            'proveedor' => 'Knauf Argentina',
            'precio_compra' => 45.00,
            'precio_venta' => 65.00,
            'stock_disponible' => 100,
            'fecha_ingreso' => now(),
            'fecha_compra' => now(),
            'codigo_lote' => 'KN-001',
            'state' => 'activo'
        ]);

        Lot::create([
            'product_id' => 2,
            'proveedor' => 'Barbieri S.A.',
            'precio_compra' => 12.00,
            'precio_venta' => 18.00,
            'stock_disponible' => 500,
            'fecha_ingreso' => now(),
            'fecha_compra' => now(),
            'codigo_lote' => 'BAR-99',
            'state' => 'activo'
        ]);

        Lot::create([
            'product_id' => 3,
            'proveedor' => 'Barbieri S.A.',
            'precio_compra' => 11.50,
            'precio_venta' => 17.00,
            'stock_disponible' => 300,
            'fecha_ingreso' => now(),
            'fecha_compra' => now(),
            'codigo_lote' => 'BAR-88',
            'state' => 'activo'
        ]);

        Lot::create([
            'product_id' => 4,
            'proveedor' => 'Durlock Oficial',
            'precio_compra' => 150.00,
            'precio_venta' => 220.00,
            'stock_disponible' => 50,
            'fecha_ingreso' => now(),
            'fecha_compra' => now(),
            'codigo_lote' => 'DUR-M25',
            'state' => 'activo'
        ]);

        Lot::create([
            'product_id' => 5,
            'proveedor' => 'Tel S.R.L.',
            'precio_compra' => 8.00,
            'precio_venta' => 15.00,
            'stock_disponible' => 1000,
            'fecha_ingreso' => now(),
            'fecha_compra' => now(),
            'codigo_lote' => 'TEL-T1AG',
            'state' => 'activo'
        ]);
    }
}
