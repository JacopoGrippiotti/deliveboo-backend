<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
