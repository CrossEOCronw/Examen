<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i=0; $i<50; $i++){
           DB::table('gatos') -> insert(array(
               'nombre' => str_random(10),
               'raza' => str_random(10),
               'color' => str_random(10),
               'edad' => random_int(1,50),
               'peso' => random_int(1,50),
               'animal_id'=>1
                ));
        }
    }
}
