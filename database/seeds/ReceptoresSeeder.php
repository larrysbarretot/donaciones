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
    }
}
