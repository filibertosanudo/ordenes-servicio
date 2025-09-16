<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleOrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_ordenes')->insert([
            [
                'orden_id' => 1,
                'servicio_id' => 1,
                'cantidad' => 2,
                'subtotal' => 500.00 * 2,
                'total' => (500.00 * 2) + (300.00 * 1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orden_id' => 1,
                'servicio_id' => 2,
                'cantidad' => 1,
                'subtotal' => 300.00 * 1,
                'total' => (500.00 * 2) + (300.00 * 1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('detalle_ordenes')->insert([
            [
                'orden_id' => 2,
                'servicio_id' => 3,
                'cantidad' => 1,
                'subtotal' => 1200.00,
                'total' => 1200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('detalle_ordenes')->insert([
            [
                'orden_id' => 3,
                'servicio_id' => 4,
                'cantidad' => 1,
                'subtotal' => 1200.00,
                'total' => 1200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orden_id' => 3,
                'servicio_id' => 2,
                'cantidad' => 2,
                'subtotal' => 300.00 * 2,
                'total' => 1200.00 + (300.00 * 2),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('detalle_ordenes')->insert([
            [
                'orden_id' => 4,
                'servicio_id' => 5,
                'cantidad' => 4,
                'subtotal' => 800.00 * 4,
                'total' => 800.00 * 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('detalle_ordenes')->insert([
            [
                'orden_id' => 5,
                'servicio_id' => 1,
                'cantidad' => 1,
                'subtotal' => 500.00,
                'total' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orden_id' => 5,
                'servicio_id' => 4,
                'cantidad' => 1,
                'subtotal' => 1200.00,
                'total' => 500.00 + 1200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
