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
        $newUser = new User();
        $newUser->name = 'Gabriele';
        $newUser->email= 'g@gmail.com';
        $newUser->password= Hash::make('ciaociao');
        $newUser->vat_num = $fakerpay->vat();
        $newUser->save();

        for ($i=0; $i < 100; $i++){
            $newUser = new User();
            $newUser->name = $faker->firstname();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make('12345678');
            $newUser->vat_num = $fakerpay->vat();
            $newUser->save();
        }
    }
}
