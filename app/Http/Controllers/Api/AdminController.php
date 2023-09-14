<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
class AdminController extends Controller
{
    public function getUserRestaurants($userId)
    {
        $user = User::findOrFail($userId); // Trova l'utente
        // Carica i ristoranti associati all'utente
        $restaurants = $user->restaurants;

        // Restituisco i dati
        return response()->json([
            'success' => true,
            'results' => [
                'user' => $user,
                'restaurants' => $restaurants
            ]
        ]);
    }

    public function getRestaurantDishes($restaurantId){
        $restaurant = Restaurant::findOrFail($restaurantId);
        $dishes = $restaurant->dishes;
        $ingredients = $dishes->ingredients;
        return response()->json([
            'success' => true,
            'results' => [
                'restaurant' => $restaurant,
                'dishes' => $dishes,
                'ingredients' => $ingredients
            ]
        ]);
    }
}
