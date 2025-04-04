<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        // Crear 10 artículos de ejemplo
        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'content' => $faker->paragraph,
                'category_id' => $faker->numberBetween(1, 5), // Relacionado con las categorías
            ]);
        }
    }
    }

