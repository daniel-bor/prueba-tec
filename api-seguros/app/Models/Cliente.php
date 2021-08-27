<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'cui',
        'nit',
        'direccion',
        'fecha_nacimiento',
        'fecha_ingreso'
    ];

    /*protected $hidden = [
        'created_at',
        'updated_at'
    ];*/
}
