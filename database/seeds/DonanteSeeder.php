<?php

use App\Donante;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DonanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i<20; $i++){
            $faker = Factory::create();
            $damnificado = new Donante();
            $damnificado->dni = $faker->randomNumber(8);
            $damnificado->save();
        }
    }
}
