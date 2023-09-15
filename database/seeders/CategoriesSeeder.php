<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories = ["Pasta", "Carne", "Latticini", "Spezie", "Verdure", "Frutta", "Dolci", "Legumi", "Pesce", "Zuppe", "Gelato", "Riso", "Grano"];
       
       foreach($categories as $category){

        $newCategory = new Category();
        $newCategory->name = $category;
        $newCategory->save();
       }
    }
}
