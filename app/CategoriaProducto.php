<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $table = 'categorias_productos';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'donantes_id');
    }
}
