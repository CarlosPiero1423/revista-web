<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        // Crear 5 productos de ejemplo
        for ($i = 0; $i < 5; $i++) {
            DB::table('products')->insert([
                'title' => $faker->word,
                'description' => $faker->sentence,
                'type' => $faker->randomElement(['impresa', 'digital']),
                'price' => $faker->randomFloat(2, 5, 50),
            ]);
        }
    }
    }

