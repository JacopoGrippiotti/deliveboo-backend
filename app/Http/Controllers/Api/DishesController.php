<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Ingredient;
use App\Models\Dish;
use App\Models\Type;

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
    public function store(User $user, Restaurant $restaurant, Request $request)
    {

        try{
            $img_path = Storage::put('uploads', $request['photo']);

            $data = $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'description' => ['required', 'string', 'min:5'],
                'price' => ['required'],
                'course' =>['required'],
                'photo' =>['file'],
                'available' =>['boolean'],
                'ingredients' =>['required','array','min:1'],
                'ingredients.*' =>['string'],
                'type' =>['required', 'string']
            ]);
            $data['photo'] = $img_path;
            $ingredientNames = $request->input('ingredients',[]);
            $ingredientIds = [];

            $typeName = $request->type;

            $type = Type::where('name', $typeName)->first();

            foreach ($ingredientNames as $ingredientName) {
                $ingredient = Ingredient::firstOrCreate(['name' => $ingredientName]);
                $ingredientIds[] = $ingredient->id;
            }

            $newDish = new Dish();
            $newDish->restaurant_id = $restaurant->id;
            $newDish->type_id = $type->id;
            $newDish->fill(array_diff_key($data, array_flip(['ingredients'])));
            $newDish->save();

            $newDish->ingredients()->sync($ingredientIds);
            $newDish->save();
            return response()->json(['success' => 'Piatto creato']);
        }
            catch(ValidationException $e){
                return response()->json(['errors' => $e->validator->getMessageBag()], 422);
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
    public function update(User $user, Restaurant $restaurant, Dish $dish, Request $request)
    {


        try{

            $request['photo'] ? $img_path = Storage::put('uploads', $request['photo']) : '';

            $data = $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'description' => ['required', 'string', 'min:10'],
                'price' => ['required', 'numeric', 'regex:/[1-9]/'],
                'course' =>['required', 'string', 'min:5' ],
                // 'photo' =>['file'],
                'available' =>['required', 'boolean'],
                'ingredients' =>['required','array','min:1'],
                'ingredients.*' =>['string']
            ]);

            $img_path ? $data['photo'] = $img_path : '';

            $ingredientNames = $request->input('ingredients', []);
            // $ingredientIds = Ingredient::whereIn('name', $ingredientNames)->pluck('id')->toArray();
            foreach ($ingredientNames as $ingredientName) {
                $ingredient = Ingredient::firstOrCreate(['name' => $ingredientName]);
                $ingredientIds[] = $ingredient->id;
            }
            $dish->update(array_diff_key($data, array_flip(['ingredients'])));
            $dish->ingredients()->sync($ingredientIds);

        }catch(ValidationException $e){
                return response()->json(['errors' => $e->validator->getMessageBag()], 422);
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
        $img_path = $dish->photo;

        $newImagePath = 'deleted-images/' . basename($img_path);
        Storage::move($img_path, $newImagePath);

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
        $img_path = $trashedDish->photo;

        $newImagePath = 'uploads/' . basename($img_path);
        Storage::move($img_path, $newImagePath);

        $trashedDish->restore();
    }

    public function obliterate(int $dishId){
        $dish = Dish::onlyTrashed()->findOrFail($dishId);
        // Storage::delete($restaurant->image);
        $dish->forceDelete();
    }


}
