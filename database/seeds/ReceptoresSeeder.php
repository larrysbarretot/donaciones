<?php

use Illuminate\Database\Seeder;
use App\Receptor;

class ReceptoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $receptor = new Receptor();
        $receptor->dni = 44556677;
        $receptor->user_id = 1;
        $receptor->save();

        $receptor = new Receptor();
        $receptor->dni = 41516677;
        $receptor->user_id = 2;
        $receptor->save();

        $receptor = new Receptor();
        $receptor->dni = 88996677;
        $receptor->user_id = 3;
        $receptor->save();
    }
}
