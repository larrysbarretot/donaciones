<?php

use Illuminate\Database\Seeder;
use App\CategoriaProducto;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'nombre' => 'Abarrotes',
                'siniestros_id' => 1,
            ],
            [
                'nombre' => 'Lacteos',
                'siniestros_id' => 1,
            ],
            [
                'nombre' => 'Bebidas',
                'siniestros_id' => 1,
            ],
            [
                'nombre' => 'Cuidado Personal',
                'siniestros_id' => 1,
            ],
            [
                'nombre' => 'Cuidado del Bebé',
                'siniestros_id' => 1,
            ],
            [
                'nombre' => 'Ropa',
                'siniestros_id' => 1,
            ],
            [
                'nombre' => 'Calzados',
                'siniestros_id' => 1,
            ],
        ];

        foreach ($categorias as $categoria){
            CategoriaProducto::create($categoria);
        }


    }
}
