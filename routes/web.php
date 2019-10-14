<?php
use App\User;
use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/index', function () {
    return view('home');
});

//Route::get('users/register', function () {
//    return view('users/register');
//});

//Route::post('users', 'UserController@newUser');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile/{id}', 'UserController@profile');

Route::get('/allPost/{id}', 'PostsController@posts')->name('allPost');;

Route::get('/viewPost/{id}', 'PostsController@view');
Route::delete('/viewPost/{id}/delete', 'PostsController@delete');
Route::post('/viewPost/{id}', 'CommentController@newComment')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@showPosts')->name('home');

Route::get('/createPost', 'PostsController@create')->middleware('auth');
Route::post('/createPost', 'PostsController@newPost')->middleware('auth');

Route::get('/addFriend/{id}', 'UserController@getAddFriend')->middleware('auth');
Route::get('/edit/{id}', 'PostsController@edit');
Route::put('/edit/{id}', 'PostsController@updatePost');
