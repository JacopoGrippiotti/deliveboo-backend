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
            $cuisine = strtolower($request->input('type'));
            $restaurantName = strtolower($request->input('name'));

            $restaurants = Restaurant::whereHas('types', function ($subquery) use ($cuisine) {
                strtolower($subquery->where('name', $cuisine));
            })->where('name', 'LIKE', '%' . $restaurantName . '%')->with('types')->get();

        }else if($request->has('type')){
            // Estrarre il tipo di cucina dalla richiesta
            strtolower($cuisine = $request->input('type'));
            // Eseguire la query per ottenere i ristoranti che corrispondono al tipo di cucina
            $restaurants = Restaurant::whereHas('types', function ($query) use ($cuisine) {
                strtolower($query->where('name', $cuisine));
            })->with('types')->get();
        }else if($request->has('name')){
            $restaurantName = $request->input('name');
            $restaurants = strtolower(Restaurant::where('name', 'LIKE', '%' . $restaurantName . '%')->get());

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
