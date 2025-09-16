<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            ['nombre' => 'Cambio de aceite', 'precio' => 350.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión de frenos', 'precio' => 450.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Alineación y balanceo', 'precio' => 500.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reparación de motor', 'precio' => 1200.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reemplazo de neumáticos', 'precio' => 800.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
