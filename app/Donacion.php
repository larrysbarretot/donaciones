<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    protected $table = 'donaciones';

    protected $fillable = [
        'damnificados_id',
        'donante_id',
        'siniestros_id',
        'acopios_id',
    ];

    public function damnificados()
    {
        return $this->belongsTo(Damnificado::class, "damnificados_id");
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, "productos_id");
    }
}
