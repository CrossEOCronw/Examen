<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class OrangutanSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('impalas') -> insert(array(
                'nombre' => str_random(10),
                'color' => str_random(10),
                'edad' => random_int(1,50),
                'peso' => random_int(1,50),
                'animal_id'=>5
            ));
        }
    }
}
