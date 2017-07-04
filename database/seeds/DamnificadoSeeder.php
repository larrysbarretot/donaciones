<?php

use App\Damnificado;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DamnificadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i<100; $i++){
            $faker = Factory::create();
            $damnificado = new Damnificado();
            $damnificado->dni = $faker->randomNumber(8);
            $damnificado->lugares_id = $faker->numberBetween(1,5);
            $damnificado->save();
        }

    }
}
