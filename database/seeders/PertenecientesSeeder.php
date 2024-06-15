<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PertenecientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pertenecientes')->insert([
            ['idProducto' => 1, 'idSubcategoria' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 2, 'idSubcategoria' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 3, 'idSubcategoria' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 4, 'idSubcategoria' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 5, 'idSubcategoria' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 6, 'idSubcategoria' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 7, 'idSubcategoria' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 8, 'idSubcategoria' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 9, 'idSubcategoria' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 10, 'idSubcategoria' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 11, 'idSubcategoria' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 12, 'idSubcategoria' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 13, 'idSubcategoria' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 14, 'idSubcategoria' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 15, 'idSubcategoria' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 16, 'idSubcategoria' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 17, 'idSubcategoria' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 18, 'idSubcategoria' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 19, 'idSubcategoria' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 20, 'idSubcategoria' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 21, 'idSubcategoria' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 22, 'idSubcategoria' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 23, 'idSubcategoria' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 24, 'idSubcategoria' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 25, 'idSubcategoria' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['idProducto' => 26, 'idSubcategoria' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
