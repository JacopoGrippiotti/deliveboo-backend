<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Ingredient;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index($restaurant_id)
    // {
    //     $restaurant = Restaurant::findOrFail($restaurantId);

    //     $dishes = $restaurant->dishes;

    //     return response()->json([
    //         'success' => true,
    //         'results' => [
    //             'restaurant' => $restaurant,
    //             'dishes' => $dishes]
    //         ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $restaurant = Restaurant::findOrFail($request->restaurant->id);

        if($restaurant){
            $data = $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'description' => ['required', 'string', 'min:10'],
                'price' => ['required', 'numeric', 'regex:/[1-9]/'],
                'course' =>['required', 'string', 'min:5' ],
                'photo' =>['required', 'url'],
                'available' =>['required', 'boolean'],
                'ingredient_names' =>['required','array','min:1'],
                'ingredient_names.*' =>['string']
            ]);

            $ingredientNames = $request->input('ingredient_names', []);

            $ingredientIds = Ingredient::whereIn('name', $ingredientNames)->pluck('id')->toArray();
            
            $newDish = Dish::create($request->except(['ingredient_names']));
            $newDish->restaurant_id = $restaurant->id;
            $newDish->save();
            $newDish->ingredients()->sync($ingredientIds);
            
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show($dishId)
    {
        $dish = Dish::findOrFail($dishId);
        $ingredients = $dish->ingredients;
        return response()->json([
            'success' => true,
            'results' => [
                'dish' => $dish,
                'ingredients' => $ingredients,
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dish = Dish::with('ingredients')->findOrFail($id);
            if (!$dish) {
                return response()->json(['message' => 'Piatto non trovato'], 404);
            }
            return response()->json(['dish' => $dish]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}