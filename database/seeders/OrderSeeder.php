<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\Dish;
use Faker\Generator as Faker;
use Faker\Factory as Fakerit;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $fakerIt = Fakerit::create('it_IT');


        // $restaurantIds= Restaurant::all()->pluck('id');
        // for($i=0; $i<100; $i++){
        //   $randomRestaurant = $faker->randomElement($restaurantIds);
        //   $newOrder = new Order();
        //   $newOrder->restaurant_id = $randomRestaurant;
        //   $newOrder->customer_name = $fakerIt->name();
        //   $newOrder->customer_address = $fakerIt->streetAddress();
        //   $newOrder->phone_number = $fakerIt->phoneNumber();
        //   $newOrder->status = $faker->randomElement([1, 0]);
        //   $newOrder->total_price = $faker->randomFloat(2, 5.0, 40.0);
        //   $newOrder->save();
        // }
    }
}
