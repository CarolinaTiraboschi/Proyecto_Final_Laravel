<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Category;
use App\Post;

class PostsController extends Controller
{
    //


    public function posts($user_id){
      $theUser=User::find($user_id)->username;
      $posts= Post::where('user_id',$user_id)->get();

      return view('AllPost', compact('posts', 'theUser'));
    }
}
