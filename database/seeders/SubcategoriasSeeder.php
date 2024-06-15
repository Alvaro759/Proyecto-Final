<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubcategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategorias')->insert([
            ['id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Intel', 'idCategoria' => 1],
            ['id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'AMD', 'idCategoria' => 1],
            ['id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'NVIDIA', 'idCategoria' => 2],
            ['id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'AMD Radeon', 'idCategoria' => 2],
            ['id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'ASUS', 'idCategoria' => 3],
            ['id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'MSI', 'idCategoria' => 3],
            ['id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'G.Skill', 'idCategoria' => 4],
            ['id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Corsair', 'idCategoria' => 4],
            ['id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Seagate', 'idCategoria' => 5],
            ['id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Western Digital', 'idCategoria' => 5],
            ['id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Apple', 'idCategoria' => 6],
            ['id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Samsung', 'idCategoria' => 6],
            ['id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Google', 'idCategoria' => 6],
            ['id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Xiaomi', 'idCategoria' => 6],
            ['id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Sony', 'idCategoria' => 6],
        ]);
    }
}
