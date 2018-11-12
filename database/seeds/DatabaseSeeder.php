<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GatosSeeder::class);
        $this->call(DingosSeeder::class);
        $this->call(CiervoSeeder::class);
        $this->call(ImpalaSeeder::class);
        $this->call(OrangutanSeeder::class);
        $this->call(PezSeeder::class);
    }
}
