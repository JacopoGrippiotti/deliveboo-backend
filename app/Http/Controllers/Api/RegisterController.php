<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
    // Validazione dei dati del form
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'vat_num' => ['required', 'unique:users', 'min:13', 'max:13', 'vat_num' => 'regex:^[A-Z]{2}\d+$^']
    ], [
        'vat_num.regex' => 'Il campo deve iniziare con due caratteri maiuscoli seguiti da numeri.',
    ]);

    // Creazione di un nuovo utente
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'vat_num' => $data['vat_num']
    ]);

    // Generazione del token JWT e restituzione di una risposta
    $token = auth()->login($user);

    return $this->respondWithToken($token);
    }
}
