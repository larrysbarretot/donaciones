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

    public function damnificado()
    {
        return $this->belongsTo(Damnificado::class, "damnificados_id");
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function donante()
    {
        return $this->belongsTo(Donante::class);
    }

    public function acopio()
    {
        return $this->belongsTo(Acopio::class, 'acopios_id');
    }

    public function siniestro()
    {
        return $this->belongsTo(Siniestro::class, 'siniestros_id');
    }
}
