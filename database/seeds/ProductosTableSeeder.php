<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,30) as $index) {
    		DB::table('productos')->insert([
    		'codArt' => $faker->ean13,
            'producto' => $faker->sentence(2),
            'descripcion' => $faker->sentence(4),
            'foto' => $faker->imageUrl($width = 240, $height = 180),
        	]);
    	}

    }
}
