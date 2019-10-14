<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Category;
use App\Post;
use App\Comment;
use Auth;

class PostsController extends Controller
{
    //

//Ver todos los post de un usuario

    public function posts($user_id){
      $theUser=User::find($user_id);
      $posts= Post::where('user_id',$user_id)->get();

      return view('AllPost', compact('posts', 'theUser'));
    }

    public function view($id){
      $post=Post::find($id);
      $theUser=User::find($post->user_id);
      $comments=Comment::where('post_id', $id)->get();


      return view('posts/viewPost', compact('post', 'theUser','comments'));
    }


//Crear, borrar y editar posts

//Funciones para creacion de formularios (get)
    public function create(){
      $this->middleware('auth');
      $categories = Category::orderBy('name')->get();
      return view('posts/createPost', compact('categories'));
    }

    public function edit($id){
      $postToUpdate = Post::find($id);
      if (Auth::id()!=$postToUpdate->user_id){
        return redirect()->route('home');
      }
      $categories = Category::orderBy('name')->get();

      return view('posts.editPost', compact('postToUpdate', 'categories'));
    }



//Funciones que modifican la base de datos

    public function newPost(Request $form){

    $form->validate([
        // input_name => rules,
        'title' => 'required | max:100',
        'paragraph' => 'required',
      ], [
        // input_name.rule => message
        'title.required' => 'Tu post debe tener un título',
        'paragraph.required' => 'Tu historia no tiene texto!',
        'max' => 'El :attribute debe contener máximo :max carácteres',

      ]);

      $post= New Post();
      $post-> title=$form['title'];
      $post-> paragraph = $form['paragraph'];
      //$post-> category_id = $form['category_id'];
      //$post-> user_id = Auth::user()->id;
      $post-> user_id = Auth::id();
      $post->save();
      $category = $form['category_id'];
      //dd($category);
        $post->categories()->sync($category);

      return redirect()->route('home');

}

public function updatePost($id, Request $request){

		$postToUpdate = Post::find($id);
		$postToUpdate-> title = $request['title'];
		$postToUpdate-> paragraph = $request['paragraph'];
		$postToUpdate->save();
    $category = $request['category_id'];
      $postToUpdate->categories()->sync($category);
		return redirect()->route('allPost',['id' => $id]);
	}


  public function delete($id){
    $postToDelete = Post::find($id);
    $postToDelete->delete();


    return redirect()->back();
}



    /*public function createPost(Request $request){
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'author' => Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Post has been successfully added!');
    }*/
}
