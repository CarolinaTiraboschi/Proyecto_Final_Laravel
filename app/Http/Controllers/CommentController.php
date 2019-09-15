<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Auth;

class CommentController extends Controller
{

    public function newComment(Request $form){
      $comment= New Comment();
      $comment-> paragraph = $form['paragraph'];
      $comment-> user_id = Auth::id();
      $comment-> post_id =$form['post_id'];
      $comment->save();

      return back();

    }
}
