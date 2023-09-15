<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            TypeSeeder::class,
            UserSeeder::class,
            RestaurantSeeder::class, // RestaurantSeeder implementa restaurant_type
            OrderSeeder::class, // OrderSeeder implementa dish_order
            IngredientSeeder::class, // IngredientSeeder implementa dish_ingredient
            CategoriesSeeder::class,
            DishSeeder::class,
            DishIngredientSeeder::class
        ]);
    }
}
