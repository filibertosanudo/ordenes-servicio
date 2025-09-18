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
            [
                'nombre' => 'Laura Sánchez',
                'email' => 'laura@example.com',
                'telefono' => '6625566778',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Miguel Torres',
                'email' => 'miguel@example.com',
                'telefono' => '6626677889',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sofía Ramírez',
                'email' => 'sofia@example.com',
                'telefono' => '6627788990',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Andrés Herrera',
                'email' => 'andres@example.com',
                'telefono' => '6628899001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Isabel Morales',
                'email' => 'isabel@example.com',
                'telefono' => '6629900112',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Javier Flores',
                'email' => 'javier@example.com',
                'telefono' => '6621011123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Paola Mendoza',
                'email' => 'paola@example.com',
                'telefono' => '6621213141',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ricardo Castro',
                'email' => 'ricardo@example.com',
                'telefono' => '6621314151',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Fernanda Rivas',
                'email' => 'fernanda@example.com',
                'telefono' => '6621415161',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Diego Navarro',
                'email' => 'diego@example.com',
                'telefono' => '6621516171',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
