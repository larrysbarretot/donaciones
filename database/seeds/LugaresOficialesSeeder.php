<?php

use Illuminate\Database\Seeder;
use App\LugarOficial;

class LugaresOficialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lugarOficial = new LugarOficial;
        $lugarOficial->siniestros_id = 1;
        $lugarOficial->acopios_id = 1;
        $lugarOficial->estado = 1;
        $lugarOficial->save();

        $lugarOficial = new LugarOficial;
        $lugarOficial->siniestros_id = 1;
        $lugarOficial->acopios_id = 2;
        $lugarOficial->estado = 0;
        $lugarOficial->save();
    }
}
