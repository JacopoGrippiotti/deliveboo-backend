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
    public function run(Faker $faker): void {
        $dishesArray = config("dishes-filler");
        $restaurants = Restaurant::all();
        $typeIds = Type::all()->pluck('id');
        $categoryIds = Category::all()->pluck('id');

        foreach($restaurants as $restaurant){
            $typesRes = $restaurant->types;
            $typesResNames = $restaurant->types->pluck('name')->toArray();
            $typesNames = [];


            foreach($typesResNames as $index => $typeName){
                $filteredArrayName = 'filteredDishes' . $index; // esempio : creo variabile filteredDishes0, 1, 2ecc..
                $$filteredArrayName = $dishesArray[$typeName];
                foreach($$filteredArrayName as $course => $dishes){

                    for($i = rand(1, 5); $i <= rand(5, count($dishes)); $i++){
                        if (isset($dishes[$i])) {
                            $newDish = new Dish();
                            $newDish->restaurant_id = $restaurant->toArray()['id'];
                            $type = Type::where('name', $typeName)->first();
                            $newDish->type_id = $type->id; //da controllare
                            $newDish->name = $dishes[$i]['nome'];
                            $newDish->description = $dishes[$i]['descrizione'];
                            $newDish->price = $faker->randomFloat(2, 5.00, 40.00);
                            $newDish->course = $course;
                            $newDish->photo = $dishes[$i]['immagine'];
                            $newDish->available = $faker->boolean();

                            $categoriesDish = Category::whereIn('name', $dishes[$i]['categoria'])->pluck('name');
                            $categoriesIds = [];
                            foreach($categoriesDish as $categoryName){
                                $category = Category::where('name', $categoryName)->first();
                                    if($category){
                                        $categoriesIds[] = $category->id;
                                    }
                            };

                            $ingredientsDish = Ingredient::whereIn('name', $dishes[$i]['ingredienti'])->pluck('name');
                            $ingredientsIds = [];

                            foreach($ingredientsDish as $ingredientName){
                                $ingredient = Ingredient::where('name', $ingredientName)->first();
                                    if($ingredient){
                                        $ingredientsIds[] = $ingredient->id;
                                    }
                                };
                            $newDish->save();

                            $newDish->categories()->sync($categoriesIds);
                            $newDish->ingredients()->sync($ingredientsIds);

                            $newDish->save();
                        }
                    }
                }
            }




        }

    }


}
//     public function run(Faker $faker): void {
//  $dishesArray = config("dishes-filler");
//       $typeIds = Type::all()->pluck('id');
//       $restaurantIds = Restaurant::all()->pluck('id');
//        $orderIds = Order::all()->pluck('id');
//       $pureRestaurantIds = $restaurantIds->toArray();
//       $assignedRestaurantIds = [];
//     for($i=0; $i < 2; $i++){
//       foreach($dishesArray as $dish=>$courseArray){
//         foreach($courseArray as $course=>$elementsArray){
//           foreach($elementsArray as $element){
//             if($i==1){
//                 $ingredientNames = $element['ingredienti'];
//             $categoriesNames = $element['categoria'];
//             $categoriesIds = [];
//             $ingredientIds = [];

//             foreach($ingredientNames as $ingredientName){
//                $ingredient = Ingredient::where('name',$ingredientName)->first();
//                if($ingredient){
//                 $ingredientIds[] = $ingredient->id;
//                }
//             };

//             foreach($categoriesNames as $categoryName){
//                $category = Category::where('name',$categoryName)->first();
//                if($category){
//                 $categoriesIds[] = $category->id;
//                }
//             };

//             $newDish = new Dish();
//             $newDish->restaurant_id = $faker->randomElement($nonAssignedRestaurantIds);
//                 if (!in_array($newDish->restaurant_id, $assignedRestaurantIds)) {
//                     $assignedRestaurantIds[] = $newDish->restaurant_id;
//                     $nonAssignedRestaurantIds = array_diff($pureRestaurantIds, $assignedRestaurantIds);
//             }
//             $type = Type::where('name',$dish)->first();
//             $typeId = $type->id;

//             $newDish->type_id = $typeId;
//             $newDish->name = $element['nome'];
//             $newDish->description = $element['descrizione'];
//             $newDish->price = $faker->randomFloat(2, 5.00, 40.00);
//             $newDish->course = $course;
//             $newDish->photo = $element['immagine'];
//             $newDish->available = $faker->boolean();
//             $newDish->save();

//             $newDish->ingredients()->sync($ingredientIds);
//             $newDish->categories()->sync($categoriesIds);

//             $order = Order::find($randomOrder);
//             $order->dishes()->attach([$newDish->id]);

//             $newDish->save();
//             }

//             $randomOrder = $faker->randomElement($orderIds);
//             $orderRestaurantId = Order::find($randomOrder)->restaurant_id;
//             $ingredientNames = $element['ingredienti'];
//             $categoriesNames = $element['categoria'];
//             $categoriesIds = [];
//             $ingredientIds = [];

//             foreach($ingredientNames as $ingredientName){
//                $ingredient = Ingredient::where('name',$ingredientName)->first();
//                if($ingredient){
//                 $ingredientIds[] = $ingredient->id;
//                }
//             };

//             foreach($categoriesNames as $categoryName){
//                $category = Category::where('name',$categoryName)->first();
//                if($category){
//                 $categoriesIds[] = $category->id;
//                }
//             };

//             $newDish = new Dish();
//             $newDish->restaurant_id = $faker->randomElement($restaurantIds);
//                 if (!in_array($newDish->restaurant_id, $assignedRestaurantIds)) {
//                     $assignedRestaurantIds[] = $newDish->restaurant_id;
//                     $nonAssignedRestaurantIds = array_diff($pureRestaurantIds, $assignedRestaurantIds);
//             }
//             $type = Type::where('name',$dish)->first();
//             $typeId = $type->id;

//             $newDish->type_id = $typeId;
//             $newDish->name = $element['nome'];
//             $newDish->description = $element['descrizione'];
//             $newDish->price = $faker->randomFloat(2, 5.00, 40.00);
//             $newDish->course = $course;
//             $newDish->photo = $element['immagine'];
//             $newDish->available = $faker->boolean();
//             $newDish->save();

//             $newDish->ingredients()->sync($ingredientIds);
//             $newDish->categories()->sync($categoriesIds);

//             $order = Order::find($randomOrder);
//             $order->dishes()->attach([$newDish->id]);

//             $newDish->save();

//           }
//         }

//       }
//     }
//     }

