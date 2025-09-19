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
                'email' => 'juan@gmail.com',
                'telefono' => '6621234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María López',
                'email' => 'maria@gmail.com',
                'telefono' => '6627654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Pedro García',
                'email' => 'pedro@gmail.com',
                'telefono' => '6621122334',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana Martínez',
                'email' => 'ana@gmail.com',
                'telefono' => '6623344556',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos Rodríguez',
                'email' => 'carlos@gmail.com',
                'telefono' => '6624455667',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laura Sánchez',
                'email' => 'laura@gmail.com',
                'telefono' => '6625566778',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Miguel Torres',
                'email' => 'miguel@gmail.com',
                'telefono' => '6626677889',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sofía Ramírez',
                'email' => 'sofia@gmail.com',
                'telefono' => '6627788990',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Andrés Herrera',
                'email' => 'andres@gmail.com',
                'telefono' => '6628899001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Isabel Morales',
                'email' => 'isabel@gmail.com',
                'telefono' => '6629900112',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Javier Flores',
                'email' => 'javier@gmail.com',
                'telefono' => '6621011123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Paola Mendoza',
                'email' => 'paola@gmail.com',
                'telefono' => '6621213141',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ricardo Castro',
                'email' => 'ricardo@gmail.com',
                'telefono' => '6621314151',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Fernanda Rivas',
                'email' => 'fernanda@gmail.com',
                'telefono' => '6621415161',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Diego Navarro',
                'email' => 'diego@gmail.com',
                'telefono' => '6621516171',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
