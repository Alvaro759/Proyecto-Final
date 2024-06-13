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
            ['id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Cooler Master', 'idCategoria' => 6],
            ['id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'EVGA', 'idCategoria' => 6],
            ['id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'NZXT', 'idCategoria' => 7],
            ['id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Thermaltake', 'idCategoria' => 7],
            ['id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Noctua', 'idCategoria' => 8],
            ['id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Corsair', 'idCategoria' => 8],
            ['id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Samsung', 'idCategoria' => 9],
            ['id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'LG', 'idCategoria' => 9],
            ['id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Logitech', 'idCategoria' => 10],
            ['id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Razer', 'idCategoria' => 10],
            ['id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Logitech', 'idCategoria' => 11],
            ['id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Razer', 'idCategoria' => 11],
            ['id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Kingston', 'idCategoria' => 12],
            ['id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Sandisk', 'idCategoria' => 12],
            ['id' => 25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'HP', 'idCategoria' => 13],
            ['id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Canon', 'idCategoria' => 13],
            ['id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Epson', 'idCategoria' => 14],
            ['id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Brother', 'idCategoria' => 14],
            ['id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Microsoft', 'idCategoria' => 15],
            ['id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Adobe', 'idCategoria' => 15],
            ['id' => 31, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'TP-Link', 'idCategoria' => 16],
            ['id' => 32, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Netgear', 'idCategoria' => 16],
            ['id' => 33, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Apple', 'idCategoria' => 17],
            ['id' => 34, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Samsung', 'idCategoria' => 17],
            ['id' => 35, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Apple', 'idCategoria' => 18],
            ['id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Dell', 'idCategoria' => 18],
            ['id' => 37, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Samsung', 'idCategoria' => 19],
            ['id' => 38, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Apple', 'idCategoria' => 19],
            ['id' => 39, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Samsung', 'idCategoria' => 20],
            ['id' => 40, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Apple', 'idCategoria' => 20],
            ['id' => 41, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Asrock', 'idCategoria' => 3],
            ['id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Gigabyte', 'idCategoria' => 3],
            ['id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Crucial', 'idCategoria' => 4],
            ['id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'ADATA', 'idCategoria' => 4],
            ['id' => 45, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Toshiba', 'idCategoria' => 5],
            ['id' => 46, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'ADATA', 'idCategoria' => 5],
            ['id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Deepcool', 'idCategoria' => 8],
            ['id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'be quiet!', 'idCategoria' => 8],
            ['id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Acer', 'idCategoria' => 9],
            ['id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'BenQ', 'idCategoria' => 9],
            ['id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Google', 'idCategoria' => 20],
            ['id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Xiaomi', 'idCategoria' => 20],
            ['id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'OnePlus', 'idCategoria' => 20],
            ['id' => 54, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Sony', 'idCategoria' => 20],
        ]);
    }
}
