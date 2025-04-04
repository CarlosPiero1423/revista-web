<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HemerotecaTableSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        // Crear 5 entradas en la hemeroteca
        for ($i = 0; $i < 5; $i++) {
            DB::table('hemeroteca')->insert([
                'title' => $faker->sentence,
                'type' => $faker->randomElement(['impresa', 'digital']),
                'file_path' => $faker->url,
                'published_at' => $faker->date,
            ]);
        }
    }
}
