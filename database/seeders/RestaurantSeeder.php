<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Type;
use Faker\Provider\it_IT\Address as Fakeraddress;
use Faker\Generator as Faker;
use Faker\Factory as Fakerit;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(Faker $faker, Fakeraddress $fakerAddress): void
    {
        $fakerIt = Fakerit::create('it_IT');
        $restaurantsNames = config('restaurantsnames-filler');

          $userIds= User::all()->pluck('id');
          $types = Type::all()->pluck('id');

          foreach($restaurantsNames as $restaurantsName => $restaurantNamesArray){

            foreach($restaurantNamesArray as $restaurantName){

            $typeArrayRandom = $faker->randomElements($types,$faker->numberBetween(1, 3));
            $randomUser= $faker->randomElement($userIds);
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id=$randomUser;
            $newRestaurant->name = $restaurantName;
            $newRestaurant->address = $fakerIt->streetAddress();
            $newRestaurant->city = $fakerAddress->state();
            $newRestaurant->save();
            $newRestaurant->types()->sync($typeArrayRandom);
            $newRestaurant->save();
        }
    }
        }
    }
