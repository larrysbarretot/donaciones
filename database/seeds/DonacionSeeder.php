<?php

use App\Donacion;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DonacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=1; $i<=500; $i++){
            Donacion::create([
                'damnificados_id' => null,
                'donante_id' => $i,
                'siniestros_id' => 1,
                'acopios_id' => $faker->numberBetween(1,2),
                'created_at' => $faker->dateTime(),
            ]);
        }
    }
}
