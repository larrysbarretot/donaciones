<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acopio extends Model
{
    protected $table = 'acopios';

    public function voluntarios()
    {
        return $this->hasMany(Voluntario::class, 'acopios_id');
    }

    public function lugares_oficiales()
    {
    	return $this->hasMany(LugarOficial::class, 'acopios_id');
    }
}
