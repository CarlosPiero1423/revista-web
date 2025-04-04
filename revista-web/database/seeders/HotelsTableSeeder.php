<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HotelsTableSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        // Crear 5 hoteles de ejemplo
        for ($i = 0; $i < 5; $i++) {
            DB::table('hotels')->insert([
                'name' => $faker->company,
                'address' => $faker->address,
                'destination_id' => $faker->numberBetween(1, 5), // Relacionado con los destinos
                'price_per_night' => $faker->randomFloat(2, 20, 100),
                'rating' => $faker->randomFloat(1, 1, 5),
            ]);
        }
    }
}
