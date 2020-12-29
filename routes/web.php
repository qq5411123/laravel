<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserCollection;
use App\Http\Resources\User as UserResource;

use App\User;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');

Route::get('foo', function () {
    return 'Hello World';
});

//Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::get('user/age/{age}', 'UserController@age')->middleware('check');

//Route::get('/user', function () {
//    return (new UserResource(User::all()));
////    return new UserCollection(User::all());
////    return UserResource::collection(User::all());
//
//});

Route::get('/user', function () {
//    return (new UserResource(User::all()))
//        ->response()
//        ->header('X-Value', 'True');

    $users = App\User::all();

    return $users->toArray();
});

/*Route::middleware(['check'])->group(function () {
    Route::get('user/age/{age}', 'UserController@age');
});*/
Route::resource('photos', 'PhotoController');
//Route::resource('photos.comments', 'PhotoCommentController');
Route::resource('photos.comments', 'PhotoCommentController');

Route::get('post/create', 'PostController@create');

Route::post('post', 'PostController@store');

Route::get('child', function () {
    return view('child');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts', 'PostsController@shijianfenfa');
