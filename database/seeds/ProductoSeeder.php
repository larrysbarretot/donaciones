<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $productos = [
            [
                'codigo' => $faker->randomNumber(8),
                'cantidad' => $faker->numberBetween(5, 20),
                'categorias_productos_id' => $faker->numberBetween(5, 20),
                'subcategorias_productos_id' => $faker->numberBetween(5, 20),
                'receptores_id' => 1,
                'donantes_id' => 1,
                'donacion_id' => 1,
            ],
        ];

        for($i=1; $i<=20; $i++){//donantes y donaciones(tienen el mismo id)
            for($j=0; $j<$faker->numberBetween(1, 20); $j++){//cantidad de productos
                \App\Producto::create([
                    'codigo' => $faker->randomNumber(8),
                    'cantidad' => $faker->numberBetween(5, 20),
                    'categorias_productos_id' => $faker->numberBetween(1, 7),
                    'subcategorias_productos_id' => $faker->numberBetween(1, 17),
                    'receptores_id' => null,
                    'donantes_id' => $i,
                    'donacion_id' => $i,
                ]);
            }

        }

    }
}
