<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliza extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function cliente()
    {
        return $this->hasMany(Cliente::class);
    }
    public function producto()
    {
        return $this->hasMany(Producto::class);
    }

    protected $fillable = [
        "producto_id",
        "cliente_id",
        "fecha_inicio",
        "fecha_fin",
        "estado",
        "created_at",
        "updated_at"
    ];
}
