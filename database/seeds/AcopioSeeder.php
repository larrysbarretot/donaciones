<?php

use App\Acopio;
use Illuminate\Database\Seeder;

class AcopioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acopio = new Acopio();
        $acopio->nombre = "Centro de Acopio 1";
        $acopio->save();

        $acopio = new Acopio();
        $acopio->nombre = "Centro de Acopio 2";
        $acopio->save();
    }
}
