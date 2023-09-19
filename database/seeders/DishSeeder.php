<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\Ingredient;
use App\Models\Order;
use App\Models\Category;
use Faker\Generator as Faker;

class DishSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {    
      $dishesArray = config("dishes-filler");
      $typeIds = Type::all()->pluck('id');
      $restaurantIds = Restaurant::all()->pluck('id');
      
      
      $orderIds = Order::all()->pluck('id');
      foreach($dishesArray as $dish=>$courseArray){
        
        foreach($courseArray as $course=>$elementsArray){

          foreach($elementsArray as $element){
            $randomOrder = $faker->randomElement($orderIds);
            $orderRestaurantId = Order::find($randomOrder)->restaurant_id;
            $ingredientNames = $element['ingredienti'];
            $categoriesNames = $element['categoria'];
            $categoriesIds = [];
            $ingredientIds = [];
            foreach($ingredientNames as $ingredientName){
               $ingredient = Ingredient::where('name',$ingredientName)->first();
               if($ingredient){
                $ingredientIds[] = $ingredient->id;
               }
            };
            foreach($categoriesNames as $categoryName){
               $category = Category::where('name',$categoryName)->first();
               if($category){
                $categoriesIds[] = $category->id;
               }
            };
            $newDish = new Dish();
            $newDish->restaurant_id = $orderRestaurantId;
            $type = Type::where('name',$dish)->first();
            $typeId = $type->id;
            $newDish->type_id = $typeId;
            $newDish->name = $element['nome'];
            $newDish->description = $element['descrizione'];
            $newDish->price = $faker->randomFloat(2, 5.0,40.0 );
            $newDish->course = $course;
            $newDish->photo = $faker->name();
            $newDish->available = $faker->boolean();
            $newDish->save();
            $newDish->ingredients()->sync($ingredientIds);
            $newDish->categories()->sync($categoriesIds);
            $order = Order::find($randomOrder);
            $order->dishes()->sync([$newDish->id]);
            $newDish->save();
          }
        }

      }

    }
  }
