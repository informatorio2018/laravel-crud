<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	foreach (range(1,20) as $index) {
    		DB::table('clientes')->insert([
            'nombre' => $faker->name,
            'direccion' => $faker->address,
            'foto' => $faker->imageUrl($width = 240, $height = 180),
        	]);
    	}

        



    }
}
