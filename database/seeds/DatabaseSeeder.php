<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SiniestroSeeder::class);
        $this->call(AcopioSeeder::class);
        $this->call(LugaresOficialesSeeder::class);
        $this->call(LugaresSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ReceptoresSeeder::class);
        $this->call(VoluntarioSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubCategoriaSeeder::class);
        $this->call(DonanteSeeder::class);
        $this->call(DonacionSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
