<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class LoginController extends Controller
{
    use HasApiTokens;

    public function login(Request $request)
    {
        // Validazione dei dati inviati dal client
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required','string', 'min:8']
        ]);

        // Tentativo di autenticazione se è true l'utente viene autenticato
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Genera un token JWT (se necessario) e restituiscilo nella risposta
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->plainTextToken;
            return response()->json(['token' => $token,
                                    'token_type' => 'Bearer',
                                    'user' => $user,
                                    ], 200);
        }

        // Se l'autenticazione fallisce, restituisci un errore
        return response()->json(['error' => 'Credenziali non valide'], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json(['message' => 'Logout effettuato con successo']);
    }
}
