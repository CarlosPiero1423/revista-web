<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DestinationsTableSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        // Crear 5 destinos de ejemplo
        for ($i = 0; $i < 5; $i++) {
            DB::table('destinations')->insert([
                'name' => $faker->city,
                'description' => $faker->paragraph,
                'image_url' => $faker->imageUrl,
            ]);
        }
    }
}
