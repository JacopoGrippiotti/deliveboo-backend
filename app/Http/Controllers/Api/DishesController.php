<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Ingredient;
use App\Models\Dish;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index($userId, $restaurantId)
     {
         $restaurant = Restaurant::findOrFail($restaurantId);

         $dishes = $restaurant->dishes;

         return response()->json([
             'success' => true,
             'results' => $dishes

             ]);
     }

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
    public function show($userId, $restaurantId, $dishId)
    {
        $dish = Dish::findOrFail($dishId);
        // dd($dish);
        $ingredients = $dish->ingredients;
        return response()->json([
            'success' => true,
            'results' => [
                'dish' => $dish,
                'ingredients' => $ingredients
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userId, $restaurantId, $dishId)
    {
        $dish = Dish::with('ingredients')->findOrFail($dishId);
            if (!$dish) {
                return response()->json(['message' => 'Piatto non trovato'], 404);
            }
            return response()->json(['dish' => $dish]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($userId, $restaurantId,Dish $dish, Request $request)
    {

        if($dish){
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

            $dish->update($request->except(['ingredient_names']));
            $dish->ingredients()->sync($ingredientIds);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $userId, int $restaurantId, int $dishId)
    {
        $dish = Dish::findOrFail($dishId);
        if (!$dish) {
            return response()->json(['message' => 'Piatto non trovato.']);
        }

        $dish->delete();
        return response()->json([
                                'message' => 'Piatto eliminato con successo.',
                                'dishDeleted' => $dish
                            ]);
    }
    public function deletedIndex(int $userId, int $restaurantId){
        $restaurant = Restaurant::findOrFail($restaurantId);
        $trashedDishes = Dish::whereHas('restaurant', function ($query) use ($restaurant){
            $query->where('id', $restaurant->id)->with('ingredients');
        })->onlyTrashed()->get();

        return response()->json([
            'success' => 'true',
            'results' => $trashedDishes
        ]);
    }

    public function restore(int $userId, int $restaurantId, int $dishId){
        $trashedDish = Dish::with('ingredients')->onlyTrashed()->findOrFail($dishId);
        $trashedDish->restore();
    }

    public function obliterate(int $dishId){
        $dish = Dish::onlyTrashed()->findOrFail($dishId);
        // Storage::delete($restaurant->image);
        $dish->forceDelete();
    }


}
