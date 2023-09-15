<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

        // Validazione dei dati del form
        try{$data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'vat_num' => ['required', 'min:13', 'max:13']
        ]);}catch(\Exception $e){
            return response()->json(['error' => 'errore convalida']);
        }


    try{
        // Creazione di un nuovo utente
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'vat_num' => $data['vat_num']
        ]);

        // Generazione del token JWT e restituzione di una risposta
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }catch(\Exception $e) {
        return response()->json(['error' => 'Errore durante la registrazione'], 500); // Internal Server Error
    }

    }
}
