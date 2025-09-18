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
            ['nombre' => 'Cambio de aceite', 'descripcion' => 'Reemplazo del aceite del motor para asegurar un rendimiento óptimo.', 'precio' => 350.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión de frenos', 'descripcion' => 'Inspección y mantenimiento del sistema de frenos para garantizar la seguridad del vehículo.', 'precio' => 450.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Alineación y balanceo', 'descripcion' => 'Ajuste de las ruedas para mejorar la estabilidad y el desgaste de los neumáticos.', 'precio' => 500.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reparación de motor', 'descripcion' => 'Reparación de fallos en el motor para asegurar el funcionamiento adecuado del vehículo.', 'precio' => 1200.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reemplazo de neumáticos', 'descripcion' => 'Sustitución de neumáticos desgastados o dañados para asegurar la seguridad y el rendimiento del vehículo.', 'precio' => 800.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
