<?php

use App\SubcategoriaProducto;
use Illuminate\Database\Seeder;

class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategorias = [
            [
                'nombre' => 'Aceite',
                'categorias_productos_id' => 1,
            ],
            [
                'nombre' => 'Arroz',
                'categorias_productos_id' => 1,
            ],
            [
                'nombre' => 'Conserva de pescado',
                'categorias_productos_id' => 1,
            ],
            [
                'nombre' => 'Leche',
                'categorias_productos_id' => 2,
            ],
            [
                'nombre' => 'Queso',
                'categorias_productos_id' => 2,
            ],
            [
                'nombre' => 'Fiambres',
                'categorias_productos_id' => 2,
            ],
            [
                'nombre' => 'Aguas',
                'categorias_productos_id' => 3,
            ],
            [
                'nombre' => 'Gaseosas',
                'categorias_productos_id' => 3,
            ],
            [
                'nombre' => 'Jugos',
                'categorias_productos_id' => 3,
            ],
            [
                'nombre' => 'Jabones',
                'categorias_productos_id' => 4,
            ],
            [
                'nombre' => 'Cuidado Bucal',
                'categorias_productos_id' => 4,
            ],
            [
                'nombre' => 'Cuidado del cabello',
                'categorias_productos_id' => 4,
            ],
            [
                'nombre' => 'Pañales',
                'categorias_productos_id' => 5,
            ],
            [
                'nombre' => 'Biberones',
                'categorias_productos_id' => 5,
            ],
            [
                'nombre' => 'Alimento para bebé',
                'categorias_productos_id' => 5,
            ],
            [
                'nombre' => 'Zapatos',
                'categorias_productos_id' => 6,
            ],
            [
                'nombre' => 'Polos',
                'categorias_productos_id' => 7,
            ],
        ];

        foreach ($subcategorias as $subcategoria){
            SubcategoriaProducto::create($subcategoria);
        }
    }
}
