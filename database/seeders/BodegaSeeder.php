<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodegas')->insert([
            ['BDG_NOMBRE' => "Concepción"],
            ['BDG_NOMBRE' => "Curanilahue"],
            ['BDG_NOMBRE' => "Cañete"],
            ['BDG_NOMBRE' => "Santiago"]
        ]);
    }
}
