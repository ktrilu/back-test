<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'dispositivos',
            'bodegas',
            'modelos',
            'marcas',
        ]);
  
        // Ejecutar los seeders:
        //$this->call(DispositivosSeeder::class);
        $this->call([
            BodegaSeeder::class,
            MarcaSeeder::class,
            ModeloSeeder::class,
            DispositivoSeeder::class
        ]);
    }
    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
