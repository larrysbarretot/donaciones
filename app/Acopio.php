<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acopio extends Model
{
    protected $table = 'acopios';

    public function receptores()
    {
        return $this->belongsToMany(Receptor::class);
    }
}
