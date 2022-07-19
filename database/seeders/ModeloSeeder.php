<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos')->insert([
            [
                'MDL_NOMBRE' => 'Iphone',
                'MRC_ID' => 1
            ],
            [
                'MDL_NOMBRE' => 'MacBook Air',
                'MRC_ID' => 1
            ],
            [
                'MDL_NOMBRE' => 'MacBook Pro',
                'MRC_ID' => 1
            ],
            [
                'MDL_NOMBRE' => 'Aspire',
                'MRC_ID' => 2
            ],
            [
                'MDL_NOMBRE' => 'Nitro',
                'MRC_ID' => 2
            ],
            [
                'MDL_NOMBRE' => 'Prestige',
                'MRC_ID' => 3
            ],
            [
                'MDL_NOMBRE' => 'Pavilion',
                'MRC_ID' => 4
            ],
            [
                'MDL_NOMBRE' => 'Omen',
                'MRC_ID' => 4
            ],
            [
                'MDL_NOMBRE' => 'Galaxy',
                'MRC_ID' => 5
            ],
            [
                'MDL_NOMBRE' => 'POCO',
                'MRC_ID' => 6
            ],
            [
                'MDL_NOMBRE' => 'Xiaomi',
                'MRC_ID' => 6
            ],
            [
                'MDL_NOMBRE' => 'Redmi',
                'MRC_ID' => 6
            ],
            [
                'MDL_NOMBRE' => 'Redmi',
                'MRC_ID' => 6
            ],
            [
                'MDL_NOMBRE' => 'Vivobook',
                'MRC_ID' => 7
            ],
            [
                'MDL_NOMBRE' => 'Zenbook',
                'MRC_ID' => 7
            ],
            [
                'MDL_NOMBRE' => 'TUF',
                'MRC_ID' => 7
            ],
            
        ]);
    }
}
