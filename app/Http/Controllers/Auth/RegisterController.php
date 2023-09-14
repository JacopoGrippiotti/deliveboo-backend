<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'vat_num' => ['required', 'unique:users', 'min:13', 'max:13', 'vat_num' => 'regex:^[A-Z]{2}\d+$^']
        ], [
            'vat_num.regex' => 'Il campo deve iniziare con due caratteri maiuscoli seguiti da numeri.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'vat_num' => $data['vat_num']
        ]);
    }
     // Registrazione utente tramite API
     public function register(Request $request)
     {
         // Validazione dei dati inviati dalla richiesta
         $validator = $this->validator($request->all());

         if ($validator->fails()) {
             return response()->json(['errors' => $validator->errors()], 422);
         }

         // Creazione dell'utente
         $user = $this->create($request->all());

         // Al termine della registrazione, puoi eventualmente generare un token JWT per l'utente
         $token = auth()->login($user);

         // Restituisci il token e altri dati dell'utente nella risposta JSON
         return $this->respondWithToken($token);
     }

     protected function respondWithToken($token)
     {
         return response()->json([
             'access_token' => $token,
             'token_type' => 'bearer',
             'expires_in' => auth()->factory()->getTTL() * 60,
             'user' => auth()->user(),
         ]);
     }
}
