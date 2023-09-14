<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use App\Models\Dish;

class DishIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = Dish::all();
        $ingredients = Ingredient::all();

        foreach($dishes as $dish){
            // foreach($dish['primi']['ingredienti'] as $singleIngredients){
            //     dd($singleIngredients);
            //     $ingredientFound = Ingredient::where('name', '=', $singleIngredients)->get();
            //     $dishes->ingredients()->attach($ingredientFound->toArray()[0]['id']);
            }

            // foreach($dish['secondi']['ingredienti'] as $singleIngredients){
            //     $ingredientFound = Ingredient::where('name', '=', $singleIngredients)->get();
            //     $dishes->ingredients()->attach($ingredientFound->toArray()[0]['id']);
            // }

            // foreach($dish['dolci']['ingredienti'] as $singleIngredients){
            //     $ingredientFound = Ingredient::where('name', '=', $singleIngredients)->get();
            //     $dishes->ingredients()->attach($ingredientFound->toArray()[0]['id']);
            // }

        }
    }


