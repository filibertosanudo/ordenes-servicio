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
            ['orden_id' => 1, 'servicio_id' => 1, 'cantidad' => 2, 'subtotal' => 500.00 * 2, 'total' => 1300.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 1, 'servicio_id' => 2, 'cantidad' => 1, 'subtotal' => 300.00, 'total' => 1300.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 2, 'servicio_id' => 3, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 1200.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 3, 'servicio_id' => 4, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 1800.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 3, 'servicio_id' => 2, 'cantidad' => 2, 'subtotal' => 300.00 * 2, 'total' => 1800.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 4, 'servicio_id' => 5, 'cantidad' => 4, 'subtotal' => 800.00 * 4, 'total' => 3200.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 5, 'servicio_id' => 1, 'cantidad' => 1, 'subtotal' => 500.00, 'total' => 1700.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 5, 'servicio_id' => 4, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 1700.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 6, 'servicio_id' => 2, 'cantidad' => 3, 'subtotal' => 300.00 * 3, 'total' => 3100.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 6, 'servicio_id' => 5, 'cantidad' => 2, 'subtotal' => 800.00 * 2, 'total' => 3100.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 7, 'servicio_id' => 1, 'cantidad' => 2, 'subtotal' => 500.00 * 2, 'total' => 1500.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 8, 'servicio_id' => 3, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 2700.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 8, 'servicio_id' => 4, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 2700.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 9, 'servicio_id' => 2, 'cantidad' => 2, 'subtotal' => 300.00 * 2, 'total' => 1800.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 10, 'servicio_id' => 5, 'cantidad' => 1, 'subtotal' => 800.00, 'total' => 800.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 10, 'servicio_id' => 1, 'cantidad' => 1, 'subtotal' => 500.00, 'total' => 1300.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 11, 'servicio_id' => 3, 'cantidad' => 2, 'subtotal' => 1200.00 * 2, 'total' => 2400.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 12, 'servicio_id' => 4, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 1200.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 13, 'servicio_id' => 2, 'cantidad' => 3, 'subtotal' => 300.00 * 3, 'total' => 900.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 14, 'servicio_id' => 5, 'cantidad' => 2, 'subtotal' => 800.00 * 2, 'total' => 1600.00, 'created_at' => now(), 'updated_at' => now()],

            ['orden_id' => 15, 'servicio_id' => 1, 'cantidad' => 1, 'subtotal' => 500.00, 'total' => 500.00, 'created_at' => now(), 'updated_at' => now()],
            ['orden_id' => 15, 'servicio_id' => 4, 'cantidad' => 1, 'subtotal' => 1200.00, 'total' => 1700.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
