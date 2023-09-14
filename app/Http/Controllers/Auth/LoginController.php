<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Valida i dati dell'utente
        $credentials = $request->only('email', 'password');

        // Effettua l'autenticazione
        if (Auth::attempt($credentials)) {
            // Se l'autenticazione ha successo, crea un token JWT
            $token = auth()->user()->createToken('MyToken')->accessToken;

            // Restituisci il token nella risposta JSON
            return response()->json(['token' => $token], 200);
        }

        // Se l'autenticazione fallisce, restituisci un errore
        return response()->json(['error' => 'Credenziali non valide'], 401);
    }
}
