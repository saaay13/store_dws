<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale::create([
            'seller_id' => 1,
            'client_id' => 1,
            'fecha' => now(),
            'total' => 350.00,
            'direccion_entrega' => 'Calle Falsa 123',
            'metodo_pago' => 'efectivo',
            'state_sale' => 'entregado',
            'state_payment' => 'pagado',
            'state' => 'activo',
        ]);

        Sale::create([
            'seller_id' => 1,
            'client_id' => 1,
            'fecha' => now(),
            'total' => 120.50,
            'direccion_entrega' => 'Av. Principal 456',
            'metodo_pago' => 'transferencia',
            'state_sale' => 'pendiente',
            'state_payment' => 'pendiente',
            'state' => 'activo',
        ]);
    }
}
