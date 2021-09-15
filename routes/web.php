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
Route::get('/', [App\Http\Controllers\courseViewController::class, 'welcos'])->name('welcome');
Route::get('/our-courses', [App\Http\Controllers\courseViewController::class, 'our_courses'])->name('our-courses');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'determin_tutor_status'])->name('home');

Route::get('/profile', function () { return view('profile'); });
//Route::get('/courses', function () { return view('courses'); });
Route::get('/assignments', function () { return view('assignments'); });
//Route::get('/tutors', function () { return view('tutors'); });
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


Route::get('/apply-to-teach/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('apply-to-teach/{id}');

Route::post('/teachtoday/{id}', [App\Http\Controllers\applyToTeachController::class, 'create'])->name('/teachtoday/{id}');



Route::get('/courses', [App\Http\Controllers\courseViewController::class, 'index'])->name('courses');


Route::get('/inactive_courses', [App\Http\Controllers\courseViewController::class, 'inactive_courses'])->name('inactive_courses');

Route::get('/all_courses', [App\Http\Controllers\courseViewController::class, 'all_courses'])->name('all_courses');


Route::get('/tutors', [App\Http\Controllers\appliedToTeachController::class, 'index'])->name('tutors');
Route::get('/all_tutors', [App\Http\Controllers\appliedToTeachController::class, 'all_tutors'])->name('all_tutors');


Route::get('/students', [App\Http\Controllers\HomeController::class, 'students'])->name('students');

Route::get('/my_applications', [App\Http\Controllers\HomeController::class, 'my_applications_tutor'])->name('my_applications');



Route::get('/applications-by-tutors', [App\Http\Controllers\appliedToTeachController::class, 'tutors'])->name('applications-by-tutors');


Route::get('/tutor_app_id/{id}', [App\Http\Controllers\appliedToTeachController::class, 'tutor_app_id'])->name('/tutor_app_id/{id}');


Route::get('/student_id/{id}', [App\Http\Controllers\StudViewController::class, 'student_id'])->name('/student_id/{id}');


Route::get('/approved_tutor_detail/{id}', [App\Http\Controllers\appliedToTeachController::class, 'approved_tutor_details'])->name('/approved_tutor_detail/{id}');



Route::get('/view_application/{id}', [App\Http\Controllers\appliedToTeachController::class, 'showsa'])->name('/view_application/{id}');
Route::post('/aprove_or_decline/{id}', [App\Http\Controllers\appliedToTeachController::class, 'edit'])->name('/aprove_or_decline/{id}');

Route::get('/active_tutors', [App\Http\Controllers\appliedToTeachController::class, 'active_tutors_list'])->name('/active_tutors');


Route::get('/users', [App\Http\Controllers\HomeController::class, 'users_list'])->name('/users');

Route::get('/user_edit/{id}', [App\Http\Controllers\HomeController::class, 'users_edit'])->name('/user_edit/{id}');

Route::post('/update_user/{id}', [App\Http\Controllers\StudViewController::class, 'edit'])->name('/update_user/{id}');


Route::post('/update_profile', [App\Http\Controllers\profileController::class, 'profileUpdate'])->name('update_profile');

Route::get('/my_courses', [App\Http\Controllers\courseViewController::class, 'my_courses'])->name('my_courses');

Route::post('/update_password', [App\Http\Controllers\profileController::class, 'update_password'])->name('update_password');

Route::get('/system', [App\Http\Controllers\systemsController::class, 'system'])->name('/system');


Route::get('/events', [App\Http\Controllers\eventsController::class, 'events'])->name('/events');

Route::get('/features_activation', [App\Http\Controllers\systemsController::class, 'features_activation'])->name('/features_activation');


Route::post('/general_data_update', [App\Http\Controllers\systemsController::class, 'general_data_update'])->name('general_data_update');

Route::post('/seo_update', [App\Http\Controllers\systemsController::class, 'seo_update'])->name('seo_update');


Route::post('/env_update', [App\Http\Controllers\systemsController::class, 'env_update'])->name('env_update');

Route::post('/update_card_one', [App\Http\Controllers\systemsController::class, 'update_card_one'])->name('update_card_one');

Route::post('/update_card_two', [App\Http\Controllers\systemsController::class, 'update_card_two'])->name('update_card_two');
Route::post('/update_card_three', [App\Http\Controllers\systemsController::class, 'update_card_three'])->name('update_card_three');


Route::post('/slider_one_update', [App\Http\Controllers\systemsController::class, 'slider_one_update'])->name('slider_one_update');


Route::post('/slider_two_update', [App\Http\Controllers\systemsController::class, 'slider_two_update'])->name('slider_two_update');

Route::post('/slider_three_update', [App\Http\Controllers\systemsController::class, 'slider_three_update'])->name('slider_three_update');

Route::get('find_course',[App\Http\Controllers\courseSearchController::class, 'find_course'])->name('find_course');



Route::get('outersearch',[App\Http\Controllers\courseSearchController::class, 'outersearch'])->name('outersearch');

Route::get('/course/{id}',[App\Http\Controllers\courseViewController::class, 'course'])->name('course/{id}');