<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Placas de Yeso',
            'description' => 'Placas estándar, resistentes a la humedad y al fuego (Drywall)',
            'image_url' => 'https://picsum.photos/200/300?text=Placas',
            'state' => 'activo'
        ]);

        Category::create([
            'name' => 'Perfiles Galvanizados',
            'description' => 'Montantes, soleras y omegas para estructura metálica',
            'image_url' => 'https://picsum.photos/200/300?text=Perfiles',
            'state' => 'activo'
        ]);

        Category::create([
            'name' => 'Masillas y Adhesivos',
            'description' => 'Compuestos para juntas y pegado de placas',
            'image_url' => 'https://picsum.photos/200/300?text=Masillas',
            'state' => 'activo'
        ]);

        Category::create([
            'name' => 'Tornillos y Fijaciones',
            'description' => 'Tornillos T1, T2 y fijaciones especiales',
            'image_url' => 'https://picsum.photos/200/300?text=Tornillos',
            'state' => 'activo'
        ]);

        Category::create([
            'name' => 'Aislantes',
            'description' => 'Lana de vidrio y materiales termoacústicos',
            'image_url' => 'https://picsum.photos/200/300?text=Aislantes',
            'state' => 'activo'
        ]);
    }
}
