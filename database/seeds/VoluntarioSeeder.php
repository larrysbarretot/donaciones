<?php

use App\Voluntario;
use Illuminate\Database\Seeder;

class VoluntarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voluntario = new Voluntario();
        $voluntario->acopios_id = 1;
        $voluntario->receptores_id = 1;
        $voluntario->estado = 1;
        $voluntario->save();

        $voluntario = new Voluntario();
        $voluntario->acopios_id = 1;
        $voluntario->receptores_id = 2;
        $voluntario->estado = 1;
        $voluntario->save();

        $voluntario = new Voluntario();
        $voluntario->acopios_id = 1;
        $voluntario->receptores_id = 3;
        $voluntario->estado = 1;
        $voluntario->save();

    }
}
