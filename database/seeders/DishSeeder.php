<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DishSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
      $dishes = config("dishes-filler");

      foreach($dishes as $dish=>$courseArray){

        foreach($courseArray as $course=>$elementsArray){

          foreach($elementsArray as $element){
             
          }

        }
      }
    }

}
