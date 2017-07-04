<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $table = 'voluntarios';

    public function acopio()
    {
    	return $this->belongsTo('App\Acopio', 'acopios_id');
    }

    public function receptor()
    {
    	return $this->belongsTo('App\Receptor', 'receptores_id');
    }
}
