<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Type;

class GuestController extends Controller
{
    public function indexRestaurants(Request $request){

        if($request->has('type') && $request->has('name')){
            $cuisine = $request->input('type');
            $restaurantName = $request->input('name');
            if (is_array($cuisine)){
            $restaurants = Restaurant::with('types')->whereIn('types', function ($subquery) use ($cuisine) {
                $subquery->where('name', $cuisine);
            })->where('name', 'LIKE', '%' . $restaurantName . '%')->paginate(10);
        }
        }else if($request->has('type')){
            // Estrarre il tipo di cucina dalla richiesta
            $cuisine = $request->input('type');
            // Eseguire la query per ottenere i ristoranti che corrispondono al tipo di cucina
            if (is_array($cuisine)){
            $restaurants = Restaurant::with('types')->whereHas('types', function ($query) use ($cuisine) {
                $query->where('name', $cuisine);
            })->paginate(10);
            }
        }else if($request->has('name')){
            $restaurantName = $request->input('name');
            $restaurants = Restaurant::where('name', 'LIKE', '%' . $restaurantName . '%')->paginate(10);

        } else{
            $restaurants = Restaurant::with('types')->paginate(20);
        }


        return response()->json([
            'success' => true,
            'results' => $restaurants,
        ]);
    }
    public function showRestaurant(int $id){
        $restaurant = Restaurant::findOrFail($id);
        $dishes = $restaurant->dishes;
        $categories = $dishes->categories;
        $ingredients = $dishes->ingredients;
        return response()->json([
            'success' => true,
            'results' => [
                $restaurant,
                $dishes,
                $ingredients,
                $categories
            ]
        ]);
    }
}
