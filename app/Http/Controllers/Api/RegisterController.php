<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();
        // Validazione dei dati del form
        $validated = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'vat_num' => ['required', 'min:13', 'max:13', 'vat_num' => 'regex:^[A-Z]{2}\d+$^']
        ], [
            'vat_num.regex' => 'Il campo deve iniziare con due caratteri maiuscoli seguiti da numeri.',
        ]);

    try{
        // Creazione di un nuovo utente
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'vat_num' => $validated['vat_num']
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

    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'user' => $user,
    //         'access_token' => $token,
    //         'token_type' => 'Bearer',
    //     ]);
    // }
}
