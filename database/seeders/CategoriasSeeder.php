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
            ['id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Fuentes de Alimentación', 'descripcion' => 'Categoría para todas las fuentes de alimentación.'],
            ['id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Cajas de PC', 'descripcion' => 'Categoría para todas las cajas de PC.'],
            ['id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Refrigeración', 'descripcion' => 'Categoría para todos los sistemas de refrigeración.'],
            ['id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Monitores', 'descripcion' => 'Categoría para todos los monitores.'],
            ['id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Teclados', 'descripcion' => 'Categoría para todos los teclados.'],
            ['id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Ratones', 'descripcion' => 'Categoría para todos los ratones.'],
            ['id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Almacenamiento Externo', 'descripcion' => 'Categoría para todos los dispositivos de almacenamiento externo.'],
            ['id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Impresoras', 'descripcion' => 'Categoría para todas las impresoras.'],
            ['id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Scanners', 'descripcion' => 'Categoría para todos los scanners.'],
            ['id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Software', 'descripcion' => 'Categoría para todo tipo de software.'],
            ['id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Redes', 'descripcion' => 'Categoría para todos los dispositivos de redes.'],
            ['id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Accesorios', 'descripcion' => 'Categoría para todos los accesorios de informática.'],
            ['id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Portátiles', 'descripcion' => 'Categoría para todos los portátiles.'],
            ['id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Tablets', 'descripcion' => 'Categoría para todas las tablets.'],
            ['id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Smartphones', 'descripcion' => 'Categoría para todos los smartphones.']
        ]);
    }
}
