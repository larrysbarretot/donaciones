<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@donaciones.com';
        $user->password = \Hash::make('secret');
        $user->save();

        for($i=0; $i<20; $i++){
            $faker = Factory::create();
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = \Hash::make('secret');
            $user->save();
        }
    }
}
