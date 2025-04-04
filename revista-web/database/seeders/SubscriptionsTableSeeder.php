<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SubscriptionsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        // Crear 5 suscripciones de ejemplo
        for ($i = 0; $i < 5; $i++) {
            DB::table('subscriptions')->insert([
                'user_id' => $faker->numberBetween(1, 10), // Relacionado con los usuarios
                'product_id' => $faker->numberBetween(1, 5), // Relacionado con los productos
                'status' => $faker->randomElement(['activa', 'vencida']),
                'start_date' => $faker->date,
                'end_date' => $faker->date,
            ]);
        }
    }
}
