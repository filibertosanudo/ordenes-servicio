<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
        [
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'telefono' => '6621234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'María López',
            'email' => 'maria@example.com',
            'telefono' => '6627654321',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Pedro García',
            'email' => 'pedro@example.com',
            'telefono' => '6621122334',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Ana Martínez',
            'email' => 'ana@example.com',
            'telefono' => '6623344556',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Carlos Rodríguez',
            'email' => 'carlos@example.com',
            'telefono' => '6624455667',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
