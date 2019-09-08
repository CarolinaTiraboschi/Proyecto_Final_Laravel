<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'pass-repeat'=>['required', 'string', 'min:8', 'same:password'],
            'full_name' => ['required | max:30'],
        ],[

        'country.required' => 'El campo País es obligatorio',
        'required' => 'El campo :attribute es obligatorio',
        'max' => 'El :attribute debe contener máximo :max carácteres',
        'email'=>'El campo debe contener un email válido ej: user@syzygy.com'
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $request=request();
      $imagen = $request->file('avatar');// El value del atributo name del input file

      if ($imagen) {
        // Armo un nombre único para este archivo
        $imagenFinal = uniqid("img_") . "." . $imagen->extension();

        // Subo el archivo en la carpeta elegida
        $imagen->storePubliclyAs("public/avatars", $imagenFinal);}

        return User::create([
            'username' => $data['username'],
            'full_name'=> $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
              // Le asigno la imagen a la película que guardamos
            'avatar' => $imagenFinal,


        ]);
    }
}
