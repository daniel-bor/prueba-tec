<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(
            [
                'nombre' => 'Andrea',
                'apellido' => 'Hernandez',
                'telefono' => '53621548',
                'cui' => '5231254123652',
                'nit' => '5986328',
                'direccion' => 'Zona 9 Ciudad de Guatemala',
                'fecha_nacimiento' => '1996-05-19',
                'fecha_ingreso' => '2015-08-21'
            ],
            [
                'nombre' => 'Oswaldo',
                'apellido' => 'Garcia',
                'telefono' => '65235421',
                'cui' => '1235452136987',
                'nit' => '4521536',
                'direccion' => 'Ciudad de Guatemala',
                'fecha_nacimiento' => '1990-08-24',
                'fecha_ingreso' => '2012-02-23'
            ],
            [
                'nombre' => 'Jose',
                'apellido' => 'Alburez',
                'telefono' => '25632451',
                'cui' => '45632136523109',
                'nit' => '8545693',
                'direccion' => 'Zona 4 Mixco',
                'fecha_nacimiento' => '1999-02-22',
                'fecha_ingreso' => '2018-04-26'
            ]
        );
    }
}
