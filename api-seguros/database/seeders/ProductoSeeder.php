<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(
            [
                'codigo' => 'AUTO',
                'descripcion' => 'VehiculosAutomotores'
            ],
            [
                'codigo' => 'VIDA',
                'descripcion' => 'SegurosdeVida'
            ]
        );
    }
}
