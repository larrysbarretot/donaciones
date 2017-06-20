<?php

use App\Lugar;
use Illuminate\Database\Seeder;

class LugaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lugares = [
            [
                'nombre' => 'Ayacucho',
            ],
            [
                'nombre' => 'Trujillo',
            ],
            [
                'nombre' => 'Tacna',
            ],
            [
                'nombre' => 'Chiclayo',
            ],
            [
                'nombre' => 'Tacna',
            ],
        ];

        foreach ($lugares as $lugar){
            Lugar::create($lugar);
        }
    }
}
