<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Placa Estándar 12.5mm',
            'description' => 'Placa de yeso 1.20 x 2.40 mts',
            'image_url' => 'https://picsum.photos/200/300?text=PlacaST',
            'state' => 'activo'
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Montante 34mm x 2.60mt',
            'description' => 'Perfil estructural de acero galvanizado',
            'image_url' => 'https://picsum.photos/200/300?text=Montante',
            'state' => 'activo'
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Solera 35mm x 2.60mt',
            'description' => 'Perfil base para estructura Drywall',
            'image_url' => 'https://picsum.photos/200/300?text=Solera',
            'state' => 'activo'
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Masilla Todo Uso 25kg',
            'description' => 'Masilla lista para usar en juntas',
            'image_url' => 'https://picsum.photos/200/300?text=Masilla25kg',
            'state' => 'activo'
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'Tornillo T1 punta aguja',
            'description' => 'Caja por 1000 unidades para perfiles',
            'image_url' => 'https://picsum.photos/200/300?text=TornillosT1',
            'state' => 'activo'
        ]);
    }
}
