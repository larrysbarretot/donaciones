<?php

use App\Siniestro;
use Illuminate\Database\Seeder;

class SiniestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siniestro = new Siniestro();
        $siniestro->nombre = "Inundación en la sierra del Perú";
        $siniestro->save();
    }
}
