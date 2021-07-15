<?php

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

use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', 'UserController@index');

Route::get('/courses', 'CoursesController@index');
Route::get('/courses/create', 'CoursesController@create');
Route::get('/courses/{course}', 'CoursesController@show');
Route::post('/courses', 'CoursesController@store');

Auth::Routes();

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/posts', 'PostController@index')->name('posts');
Route::post('/posts', 'PostController@store');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');

Route::post('/posts/{post}/likes', 'PostLikeController@store')->name('posts.likes');
Route::delete('/posts/{post}/likes', 'PostLikeController@destroy')->name('posts.likes');
