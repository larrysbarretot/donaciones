<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receptor extends Model
{
    protected $table = 'receptores';

    public function acopios()
    {
        return $this->belongsToMany(Acopio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
