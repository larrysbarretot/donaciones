<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'codigo',
        'cantidad',
        'entregado',
        'siniestros_id',
        'acopios_id',
        'categorias_productos_id',
        'subcategorias_productos_id',
        'receptores_id',
        'donantes_id',
        'donacion_id',
    ];

    public function donacion()
    {
        return $this->belongsTo(Donacion::class, "donacion_id");
    }

}
