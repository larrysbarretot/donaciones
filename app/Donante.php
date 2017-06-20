<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    protected $table = 'donantes';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'donantes_id');
    }
}
