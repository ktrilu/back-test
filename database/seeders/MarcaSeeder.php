<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            ['MRC_NOMBRE' => 'APPLE'],
            ['MRC_NOMBRE' => 'ACER'],
            ['MRC_NOMBRE' => 'MSI'],
            ['MRC_NOMBRE' => 'HP'],
            ['MRC_NOMBRE' => 'SAMSUNG'],
            ['MRC_NOMBRE' => 'XIAOMI'],
            ['MRC_NOMBRE' => 'ASUS'],
        ]);
    }
}
