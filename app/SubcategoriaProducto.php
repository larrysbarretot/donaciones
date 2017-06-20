<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcategoriaProducto extends Model
{
    protected $table = 'subcategorias_productos';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'donantes_id');
    }
}
