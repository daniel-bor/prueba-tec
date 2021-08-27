<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolizaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polizas')->insert(
            [
                'producto_id' => '1',
                'cliente_id' => '1',
                'fecha_inicio' => '2021-08-20',
                'fecha_fin' => '2021-11-06',
                'estado' => 'ACTIVO'
            ],
            [
                'producto_id' => '1',
                'cliente_id' => '2',
                'fecha_inicio' => '2020-08-20',
                'fecha_fin' => '2021-08-20',
                'estado' => 'INACTIVO'
            ],
            [
                'producto_id' => '2',
                'cliente_id' => '3',
                'fecha_inicio' => '2015-08-20',
                'fecha_fin' => '2021-11-20',
                'estado' => 'ACTIVO'
            ]
        );
    }
}
