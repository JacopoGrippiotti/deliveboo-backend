<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Type;
class AdminController extends Controller
{
    public function index($userId)
    {
        $user = User::findOrFail($userId);
        $restaurants = $user->restaurants()->with('types')->get();

        if ($restaurants) {
            // Restituisci i dettagli del ristorante
            return response()->json($restaurants);
        } else {
            // Il ristorante non è stato trovato per l'utente autenticato
            return response()->json(['error' => 'Ristorante non trovato'], 404);
        }
    }

    public function show($userId, $restaurantId){

    // Utilizza $userId e $restaurantId per recuperare i dati necessari
    // Esempio:
    // dd($userId, $restaurantId);
    $restaurant = Restaurant::with('dishes','types')->find($restaurantId);

    if (!$restaurant) {
        return response()->json(['error' => 'Ristorante non trovato'], 404);
    }

    // Assicurati che l'utente associato al ristorante sia quello corretto (se necessario)
    if ($restaurant->user_id != $userId) {
        return response()->json(['error' => 'Accesso non autorizzato'], 403);
    }

    return response()->json([
        'success' => true,
        'results' => [
            'restaurant' => $restaurant,
        ]
    ]);
    }


    public function store(User $user ,Request $request){

    $img_path = Storage::put('uploads', $request['image']);

        $data = $request->validate([
            'name' => ['required', 'string', 'min:2'],
            'address' => ['required', 'string', 'min:5'],
            'city' => ['required', 'string', 'min:5'],

            'types' => ['required', 'array'],
            'types.*' => ['string', 'exists:types,name']
        ]);

        $data['image']= $img_path;


        $data['user_id'] = $user->id;

        $typeNames = $request->input('types',[]);
        $typeIds = [];
        foreach ($typeNames as $typeName) {
            $type = Type::where('name', $typeName)->first();
            if($type){
                $typeIds[] = $type->id;
            }
        }
        $newRestaurant = Restaurant::create(array_diff_key($data, array_flip(['types'])));

        $newRestaurant->types()->sync($typeIds);
    }

    public function edit(int $userId, int $restaurantId){
        $restaurant = Restaurant::with('types')->findOrFail($restaurantId);
        if (!$restaurant) {
            return response()->json(['message' => 'Ristorante non trovato'], 404);
        }
        return response()->json(['restaurant' => $restaurant]);
    }

    public function update($userId,  Restaurant $restaurant, Request $request ){
        $img_path = Storage::put('uploads', $request['image']);

        $data = $request->validate([
            'name' => ['required', 'string', 'min:2'],
            'address' => ['required', 'string', 'min:5'],
            'city' => ['required', 'string', 'min:5'],
            'types' => ['required', 'array'],
            'types.*' => ['string', 'exists:types,name'],
            'image' =>['file'],
        ]);

        $data['image'] = $img_path;

        $data['user_id'] = $restaurant->user->id;

        $typeNames = $request->input('types',[]);
        $typeIds = [];

        foreach ($typeNames as $typeName) {
            $type = Type::where('name', $typeName)->first();
            if($type){
                $typeIds[] = $type->id;
            }
        }

        $restaurant->update($data);
        $restaurant->types()->sync($typeIds);

    }

    public function destroy($userId, $restaurantId){
        $restaurant = Restaurant::with('dishes')->findOrFail($restaurantId);
        if (!$restaurant) {
            return response()->json(['message' => 'Ristorante non trovato.']);
        }
        $img_path = $restaurant->image;
        $newImagePath = 'deleted-images/' . basename($img_path);
        Storage::move($img_path, $newImagePath);

        $restaurant->delete();
        return response()->json([
            'message' => 'Ristorante eliminato con successo.',
            'restaurantDeleted' => $restaurant]);
    }

    public function deletedIndex(int $userId){
        $user = User::findOrFail($userId);
        $trashedRestaurants = Restaurant::with('types')->whereHas('user', function ($query) use ($user) {
            $query->where('id', $user->id);
        })->onlyTrashed()->get();
        if($trashedRestaurants){
        return response()->json([
            'success' => 'true',
            'results' => $trashedRestaurants
        ]);
    }
        else{
            return response()->json(['Niente']);
        }
    }
    public function restore(int $userId, int $restaurantId){
        $trashedRestaurant = Restaurant::with('types')->onlyTrashed()->findOrFail($restaurantId);

        $img_path = $trashedRestaurant->image;
        $newImagePath = 'uploads/' . basename($img_path);
        Storage::move($img_path, $newImagePath);

        $trashedRestaurant->restore();

        return response()->json([
            'message' => 'Ristorante ripristinato con successo.',
            'restoredRestaurant' => $trashedRestaurant
        ]);
    }

    public function obliterate(int $restaurantId){
        $restaurant = Restaurant::onlyTrashed()->findOrFail($restaurantId);
        // Storage::delete($restaurant->image);
        $restaurant->forceDelete();

        return response()->json(['message' => 'Ristorante eliminato definitivamente.']);
    }

}
