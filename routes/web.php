<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () { return view('profile'); });
//Route::get('/courses', function () { return view('courses'); });
Route::get('/assignments', function () { return view('assignments'); });
Route::get('/tutors', function () { return view('tutors'); });
Route::get('/library', function () { return view('library'); });
Route::get('/announcement', function () { return view('announcement'); });
Route::get('/add-course', function () { return view('add-course'); });

Route::get('/courses', [App\Http\Controllers\courseViewController::class, 'index'])->name('courses');

Route::get('/edit/{id}', [App\Http\Controllers\courseViewController::class, 'index'])->name('edit/{id}');
Route::get('/edit/{id}', [App\Http\Controllers\courseUpdateController::class, 'show'])->name('edit/{id}');
Route::post('/edit/{id}', [App\Http\Controllers\courseUpdateController::class, 'edit'])->name('edit/{id}');



Route::get('/insert', [App\Http\Controllers\courseAddController::class, 'insert'])->name('insert');
Route::post('create', [App\Http\Controllers\courseAddController::class, 'create'])->name('create');


Route::get('/uploadfile', [App\Http\Controllers\UploadFileController::class, 'index'])->name('uploadfile');
Route::post('uploadfile', [App\Http\Controllers\UploadFileController::class, 'showUploadFile'])->name('uploadfile');


Route::get('/apply-to-teach/{id}', [App\Http\Controllers\HomeController::class, 'teach'])->name('apply-to-teach/{id}');
Route::post('teachtoday', [App\Http\Controllers\applyToTeachController::class, 'create'])->name('teachtoday');





Route::get('/update_profile', [App\Http\Controllers\profileController::class, 'index'])->name('update_profile');
Route::post('/update_profile', [App\Http\Controllers\profileController::class, 'profileUpdate'])->name('update_profile');


