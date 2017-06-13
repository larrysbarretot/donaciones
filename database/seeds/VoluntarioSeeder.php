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
        $voluntario->user_id = 1;
        $voluntario->save();

        $voluntario = new Voluntario();
        $voluntario->acopios_id = 1;
        $voluntario->user_id = 2;
        $voluntario->save();

        $voluntario = new Voluntario();
        $voluntario->acopios_id = 1;
        $voluntario->user_id = 3;
        $voluntario->save();

    }
}
