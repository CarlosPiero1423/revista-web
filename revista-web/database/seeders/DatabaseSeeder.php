<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
 // Llamar a los seeders para llenar las tablas con datos de prueba
 $this->call([
    UsersTableSeeder::class,
    CategoriesTableSeeder::class,
    ArticlesTableSeeder::class,
    ProductsTableSeeder::class,
    SubscriptionsTableSeeder::class,
    DestinationsTableSeeder::class,
    HotelsTableSeeder::class,
    HemerotecaTableSeeder::class,
    ]);

    }
}
