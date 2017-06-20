<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    protected $table = 'siniestros';

    public function lugares_oficiales()
    {
    	return $this->hasMany(LugarOficial::class, 'acopios_id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'donantes_id');
    }
}
