<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class UserController extends Controller
{

  public function profile($id){
    $user= User::find($id);
    return view('profile', compact('user'));
  }

  public function friends ($id) {

  }

  public function posts($user_id){
    $posts= Post::find($user_id);
    return view('allPost', compact('posts'));
  }

  public function newUser(Request $form){
    $user= New User();
    $user-> username=$form['username'];
    $user-> name = $form['name'];
    $user-> email = $form['email'];
    $user-> password = $form['password'];
    $user-> country = $form['country'];
    $user-> avatar = $form['avatar'];

    $user->save();
    return redirect("register");
  }


}
