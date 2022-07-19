<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispositivos')->insert([
            [
                'DSP_NOMBRE' => 'Iphone 13 Pro',
                'BDG_ID' => '1',
                'MDL_ID' => '1'
            ],
            [
                'DSP_NOMBRE' => 'Iphone SE',
                'BDG_ID' => '3',
                'MDL_ID' => '1'
            ],
            [
                'DSP_NOMBRE' => 'MacBook Air con chip M1',
                'BDG_ID' => '4',
                'MDL_ID' => '2'
            ],
            [
                'DSP_NOMBRE' => 'MacBook Air con chip M2',
                'BDG_ID' => '1',
                'MDL_ID' => '2'
            ],
            [
                'DSP_NOMBRE' => 'MacBook Pro de 13 pulgadas',
                'BDG_ID' => '2',
                'MDL_ID' => '3'
            ],
            [
                'DSP_NOMBRE' => 'MacBook Pro de 13 pulgadas',
                'BDG_ID' => '2',
                'MDL_ID' => '3'
            ],
            [
                'DSP_NOMBRE' => 'NITRO 7',
                'BDG_ID' => '1',
                'MDL_ID' => '5'
            ],
            [
                'DSP_NOMBRE' => 'Nitro 5',
                'BDG_ID' => '1',
                'MDL_ID' => '5'
            ],
            [
                'DSP_NOMBRE' => 'Aspire 5',
                'BDG_ID' => '2',
                'MDL_ID' => '4'
            ],
            [
                'DSP_NOMBRE' => 'Aspire 7',
                'BDG_ID' => '2',
                'MDL_ID' => '4'
            ],
            [
                'DSP_NOMBRE' => 'Prestige 14 Evo - A12M',
                'BDG_ID' => '4',
                'MDL_ID' => '6'
            ],
            [
                'DSP_NOMBRE' => 'Prestige 14 Pink',
                'BDG_ID' => '1',
                'MDL_ID' => '6'
            ],

        ]);
    }
}
