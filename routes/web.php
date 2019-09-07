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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

//Route::get('users/register', function () {
//    return view('users/register');
//});

//Route::post('users', 'UserController@newUser');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile/{id}', 'UserController@profile');

Route::get('/allPost/{id}', 'PostsController@posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
