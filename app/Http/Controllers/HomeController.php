<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;
use App\Comment;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showPosts(){
      $allPost = [];
      foreach (Auth::user()->followees as $followee) {
         $userPosts[] = Post::where('user_id', $followee->id)->orderBy('created_at', 'desc')->get();
         $users[]=User::find($followee->id);
      }
      for ($i=0; $i < count($users) ; $i++) {
        $newUsers[$users[$i]->id]=$users[$i];
      }

for ($i=0; $i < count($userPosts); $i++) {
  foreach ($userPosts[$i] as $post) {
    array_push($allPost, $post);
}
}

      return view('home', compact('allPost','newUsers'));
    }

    }
