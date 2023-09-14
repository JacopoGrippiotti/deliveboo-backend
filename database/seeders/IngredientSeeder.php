<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use App\Models\Dish;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $ingredients = config("ingredients-filler");

            $ingredientIds= Ingredient::all()->pluck('id');
            $dishIds = Dish::all()->pluck('id');

            foreach($ingredients as $element){
                $newIngredient = new Ingredient();
                $newIngredient->name = $element;
                $newIngredient->save();
            }



        }
}
