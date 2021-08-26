<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeguroSeeder extends Seeder
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
