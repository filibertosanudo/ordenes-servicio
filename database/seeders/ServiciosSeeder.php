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
            ['nombre' => 'Lavado completo', 'descripcion' => 'Limpieza profunda del interior y exterior del vehículo.', 'precio' => 200.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Pulido de carrocería', 'descripcion' => 'Pulido de la pintura para eliminar rayones superficiales y devolver el brillo.', 'precio' => 450.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de batería', 'descripcion' => 'Reemplazo de batería para asegurar el arranque y funcionamiento eléctrico.', 'precio' => 600.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión de luces', 'descripcion' => 'Inspección y reemplazo de luces para garantizar visibilidad y seguridad.', 'precio' => 150.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Servicio de climatización', 'descripcion' => 'Mantenimiento del sistema de aire acondicionado y calefacción del vehículo.', 'precio' => 350.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de filtros', 'descripcion' => 'Reemplazo de filtros de aceite, aire y combustible.', 'precio' => 250.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reparación de suspensión', 'descripcion' => 'Mantenimiento y reparación del sistema de suspensión del vehículo.', 'precio' => 900.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Diagnóstico electrónico', 'descripcion' => 'Revisión de fallos electrónicos mediante escáner especializado.', 'precio' => 400.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de pastillas de freno', 'descripcion' => 'Sustitución de pastillas de freno para garantizar seguridad.', 'precio' => 350.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reparación de escape', 'descripcion' => 'Revisión y reparación del sistema de escape para emisiones y rendimiento.', 'precio' => 550.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
