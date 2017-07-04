<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarOficial extends Model
{
    protected $table = 'lugares_oficiales';

    public function acopio()
    {
    	return $this->belongsTo('App\Acopio', 'acopios_id');
    }

    public function siniestro()
    {
    	return $this->belongsTo('App\Siniestro', 'siniestros_id');
    }
}
