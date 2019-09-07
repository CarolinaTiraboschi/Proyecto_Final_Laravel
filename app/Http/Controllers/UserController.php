<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class UserController extends Controller
{

  public function profile($id){
    $theUser= User::find($id);
    return view('profile', compact('theUser'));
  }

  public function friends ($id) {

  }




  /*  public function newUser(Request $form){

  $form->validate([
      // input_name => rules,
      'username' => 'required | max:15',
      'name' => 'required | max:30',
      'email' => 'required | email',
      'country' => 'required',
      'password' => 'required',
      'pass-repeat'=> 'required',
    ], [
      // input_name.rule => message
      'country.required' => 'El campo País es obligatorio',
      'required' => 'El campo :attribute es obligatorio',
      'max' => 'El :attribute debe contener máximo :max carácteres',
      'email'=>'El campo debe contener un email válido ej: user@syzygy.com'
    ]);

    $user= New User();
    $user-> username=$form['username'];
    $user-> full_name = $form['name'];
    $user-> email = $form['email'];
    $user-> password = $form['pass'];
    $user-> country = $form['country'];
    $imagen = $form->file('avatar'); // El value del atributo name del input file

    if ($imagen) {
      // Armo un nombre único para este archivo
      $imagenFinal = uniqid("img_") . "." . $imagen->extension();

      // Subo el archivo en la carpeta elegida
      $imagen->storePubliclyAs("public/avatars", $imagenFinal);

      // Le asigno la imagen a la película que guardamos
      $user-> avatar = $imagenFinal;
    }

    $user->save();
    return redirect("users/register");
  }*/


}
