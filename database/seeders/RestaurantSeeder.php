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

        $imagesRestaurants = [

                'https://i.pinimg.com/564x/33/f6/71/33f671dfbb39b83203cbcec01fce31a8.jpg',
                'https://i.pinimg.com/736x/47/0e/c2/470ec2b86daf15c0fd1eceed3ed1dc63.jpg',
                'https://i.pinimg.com/564x/aa/74/1a/aa741af51c3403baadd28f57479b2ffe.jpg',
                'https://i.pinimg.com/564x/8c/3d/50/8c3d5069698ff9e340489dcc9cb82685.jpg',
                'https://i.pinimg.com/736x/ba/a8/ec/baa8ecde58251945007889633f13c0a8.jpg',

                'https://i.pinimg.com/564x/ba/a1/e7/baa1e7e81eed4cabbdba7d9f3196ad40.jpg',
                'https://i.pinimg.com/564x/17/6a/9c/176a9ce506e3f60e96d7dd2ee56473ba.jpg',
                'https://i.pinimg.com/736x/81/3d/76/813d760313be748391e5a97a8f9e0c8e.jpg',
                'https://i.pinimg.com/564x/4d/1d/07/4d1d079c75384a67c637769bed27fe14.jpg',
                'https://i.pinimg.com/564x/ac/63/58/ac635814868394d8474eac32b424da48.jpg',

                'https://i.pinimg.com/736x/4c/2b/b3/4c2bb3e7c101009b8031e2a8e260473d.jpg',
                'https://i.pinimg.com/564x/58/b9/86/58b9864a9e28023e8f6d89e3e4084af3.jpg',
                'https://i.pinimg.com/474x/3b/a7/43/3ba74363fb5c2a0dc6ca44737069e273.jpg',
                'https://i.pinimg.com/736x/43/47/e1/4347e1f70fb959386848b7cd5b1c74cf.jpg',
                'https://i.pinimg.com/736x/9e/3b/91/9e3b91b2d71ff7caa77c6dedd2a085b0.jpg',

                'https://i.pinimg.com/736x/d1/ed/6b/d1ed6b71eca4a3574c1557a1adce6989.jpg',
                'https://i.pinimg.com/736x/1d/f4/2f/1df42f689a81ee9473cfe02a33745ab5.jpg',
                'https://i.pinimg.com/564x/cd/c0/ae/cdc0ae706ef7021c214c3eeb172b7a5f.jpg',
                'https://i.pinimg.com/736x/dc/c3/85/dcc38532d4b63ce90e2b09436ef229f5.jpg',
                'https://i.pinimg.com/736x/e7/a6/9f/e7a69f8ecaadcf9b2d3dc09dbd0777f1.jpg',

                'https://i.pinimg.com/736x/6d/be/82/6dbe82e9682e415915a5d9e7fb0e1c7b.jpg',
                'https://i.pinimg.com/736x/1a/3e/60/1a3e60e08d872abb33d346a0bac7cde5.jpg',
                'https://i.pinimg.com/736x/4a/03/e7/4a03e7d190a4f745badb02af7cafa2c8.jpg',
                'https://i.pinimg.com/736x/44/b6/30/44b6302b3a347effb3831aa838707f47.jpg',
                'https://i.pinimg.com/736x/cd/ee/47/cdee4776ce3baf217c1aaea7688dc411.jpg',

                'https://i.pinimg.com/736x/5f/59/f9/5f59f9eddfd843c4b8eef4863f3c605b.jpg',
                'https://i.pinimg.com/564x/8a/8e/44/8a8e4419ea23e9db45d2542da3189100.jpg',
                'https://i.pinimg.com/736x/b0/76/a3/b076a39822560873e5b38ac71cea762c.jpg',
                'https://i.pinimg.com/736x/70/2d/09/702d09b19a631f8abe8b340cd28e94ed.jpg',
                'https://i.pinimg.com/736x/6d/1a/a1/6d1aa15296d96daa8d63771d3e157dab.jpg',

                'https://i.pinimg.com/736x/5f/1a/ff/5f1affe4b351a8e96bca47d70c81f8e9.jpg',
                'https://i.pinimg.com/736x/9e/b9/26/9eb926473aa56fad608188d532aa3f67.jpg',
                'https://i.pinimg.com/564x/b5/8f/60/b58f602906798dfe8bd0224ccf3881bb.jpg',
                'https://i.pinimg.com/564x/b6/64/23/b66423b87c1e76ddb031422e7e905ff4.jpg',
                'https://i.pinimg.com/736x/56/84/86/56848686c0ae703fe419609446f1f3d1.jpg',

                'https://i.pinimg.com/564x/12/0d/a2/120da24dddcf71d9df87d42a0f23f671.jpg',
                'https://i.pinimg.com/736x/bd/c1/07/bdc1074717382286f7471226f4c80334.jpg',
                'https://i.pinimg.com/736x/05/7f/2f/057f2f0ddc291f5ed7810273029f1351.jpg',
                'https://i.pinimg.com/736x/03/78/13/037813c2da496df29dc19fe63cb35067.jpg',
                'https://i.pinimg.com/564x/03/bb/af/03bbaf42f1a9af5a4fe1d5082dba0ef7.jpg',

                'https://i.pinimg.com/564x/0a/0c/91/0a0c91ea6e271d3c122cf167a9f05ebc.jpg',
                'https://i.pinimg.com/736x/34/bc/f6/34bcf6b574b981a4ae6800dd07108fbc.jpg',
                'https://i.pinimg.com/564x/2b/24/5e/2b245e370cac383beb4f398a7890d95e.jpg',
                'https://i.pinimg.com/564x/54/0d/f1/540df1dc15ebc1f75489ff7fa5872ef0.jpg',
                'https://i.pinimg.com/564x/1e/e3/10/1ee3106240596e0faf6671df5701f3cb.jpg'
        ];


          foreach($restaurantsNames as $restaurantsName => $restaurantNamesArray){

            foreach($restaurantNamesArray as $restaurantName){

            $typeArrayRandom = $faker->randomElements($types,$faker->numberBetween(1, 3));
            $randomUser= $faker->randomElement($userIds);
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id=$randomUser;
            $newRestaurant->name = $restaurantName;
            $newRestaurant->address = $fakerIt->streetAddress();
            $newRestaurant->city = $fakerAddress->state();
            $newRestaurant->image = $faker->randomElement($imagesRestaurants);
            $newRestaurant->save();
            $newRestaurant->types()->sync($typeArrayRandom);
            $newRestaurant->save();
        }
    }
        }
    }
