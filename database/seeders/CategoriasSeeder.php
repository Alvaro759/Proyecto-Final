<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Procesadores', 'descripcion' => 'Categoría para todos los tipos de procesadores.'],
            ['id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Tarjetas Gráficas', 'descripcion' => 'Categoría para todas las tarjetas gráficas y GPU.'],
            ['id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Placas Base', 'descripcion' => 'Categoría para todas las placas base.'],
            ['id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Memorias RAM', 'descripcion' => 'Categoría para todas las memorias RAM.'],
            ['id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Discos Duros', 'descripcion' => 'Categoría para todos los discos duros y SSD.'],
            ['id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Smartphones', 'descripcion' => 'Categoría para todos los smartphones.']
        ]);
    }
}
