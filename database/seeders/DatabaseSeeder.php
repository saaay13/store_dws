<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Administrador Principal creado manualmente
        User::create([
            'name' => 'Admin Store',
            'apellidos' => 'Drywall',
            'ci' => '1010101',
            'telefono' => '77700011',
            'rol' => 'administrador',
            'email' => 'admin@drywall.com',
            'password' => bcrypt('admin123'),
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            LotSeeder::class,
        ]);

        User::create([
            'name' => 'Juan',
            'apellidos' => 'Vendedor',
            'ci' => '2020202',
            'telefono' => '77700022',
            'rol' => 'vendedor',
            'email' => 'juan@drywall.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'name' => 'Maria',
            'apellidos' => 'Cliente',
            'ci' => '3030303',
            'telefono' => '77700033',
            'rol' => 'cliente',
            'email' => 'maria@gmail.com',
            'password' => bcrypt('cliente123'),
        ]);

        $this->call([
            SellerSeeder::class,
            ClientSeeder::class,
            SaleSeeder::class,
            DetalleVentaSeeder::class,
        ]);
    }
}
