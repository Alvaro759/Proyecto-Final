<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AlmacenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('almacenes')->insert([
            ['id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Almacén Central', 'lugar' => 'Madrid, España'],
            ['id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Almacén Norte', 'lugar' => 'Bilbao, España'],
            ['id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Almacén Este', 'lugar' => 'Barcelona, España'],
            ['id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Almacén Sur', 'lugar' => 'Sevilla, España'],
            ['id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'nombre' => 'Almacén Oeste', 'lugar' => 'Lisboa, Portugal']
        ]);
    }
}
