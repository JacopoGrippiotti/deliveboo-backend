<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Provider\it_IT\Company as Fakerpay;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker ,Fakerpay $fakerpay): void
    {
        for ($i=0; $i < 100; $i++){
            $newUser = new User();
            $newUser->name = $faker->firstname();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->vat_num = $fakerpay->vat();
            $newUser->save();
        }
    }
}
