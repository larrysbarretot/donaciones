<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    protected $table = 'donaciones';

    protected $fillable = [
        'damnificados_id',
        'productos_id'
    ];

    public function damnificados()
    {
        return $this->belongsTo(Damnificado::class, "damnificados_id");
    }

    public function productos()
    {
        return $this->belongsTo(Producto::class, "productos_id");
    }
}
