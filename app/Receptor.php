<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receptor extends Model
{
    protected $table = 'receptores';

    public function voluntarios()
    {
        return $this->hasMany(Voluntario::class, 'receptores_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
