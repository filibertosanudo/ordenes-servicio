<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ordenes')->insert([
            ['cliente_id' => 1, 'fecha' => now()->format('Y-m-d'), 'estatus' => 'pendiente', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 2, 'fecha' => now()->subDays(1)->format('Y-m-d'), 'estatus' => 'en proceso', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 3, 'fecha' => now()->subDays(2)->format('Y-m-d'), 'estatus' => 'completada', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 4, 'fecha' => now()->subDays(3)->format('Y-m-d'), 'estatus' => 'pendiente', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 5, 'fecha' => now()->subDays(4)->format('Y-m-d'), 'estatus' => 'en proceso', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 6, 'fecha' => now()->subDays(5)->format('Y-m-d'), 'estatus' => 'completada', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 7, 'fecha' => now()->subDays(6)->format('Y-m-d'), 'estatus' => 'pendiente', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 8, 'fecha' => now()->subDays(7)->format('Y-m-d'), 'estatus' => 'en proceso', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 9, 'fecha' => now()->subDays(8)->format('Y-m-d'), 'estatus' => 'completada', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 10, 'fecha' => now()->subDays(9)->format('Y-m-d'), 'estatus' => 'pendiente', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 11, 'fecha' => now()->subDays(10)->format('Y-m-d'), 'estatus' => 'en proceso', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 12, 'fecha' => now()->subDays(11)->format('Y-m-d'), 'estatus' => 'completada', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 13, 'fecha' => now()->subDays(12)->format('Y-m-d'), 'estatus' => 'pendiente', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 14, 'fecha' => now()->subDays(13)->format('Y-m-d'), 'estatus' => 'en proceso', 'created_at' => now(), 'updated_at' => now()],
            ['cliente_id' => 15, 'fecha' => now()->subDays(14)->format('Y-m-d'), 'estatus' => 'completada', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
