<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseViewController extends Controller
{
    //


    public function index(Request $request){

$users = DB::select('select * from courses_by_admin order by number_of_students desc');
return view('courses',['users'=>$users]);
}


    //


    public function course(Request $request,$id){

$users = DB::select('select * from courses_by_admin where id=? order by number_of_students desc',[$id]);
return view('course_detailsi',['users'=>$users]);
}





    public function welcos(Request $request){

$users = DB::select("select * from courses_by_admin where course_status='active' order by number_of_students desc limit 6");



//$wordCount = DB::table('users')->where('id', '<=', $uyismin)
       //
    $uyisszmin='student';
       $wordCount = DB::table('users')->where('access_level', '<=', $uyisszmin)->count();


 $bently =  DB::table('courses_by_admin')->count();
  $bentily =  DB::table('library_or_store')->count();

return view('welcome', [
    'wordCount' => $wordCount, 
    'users' => $users,
    'bently' => $bently,
    'bentily' => $bentily
]);


//return view('welcome',['wordCount'=>$wordCount],['users'=>$users]);
}





    public function our_courses(Request $request){

$users = DB::select("select * from courses_by_admin where course_status='active' order by number_of_students desc limit 6");



//$wordCount = DB::table('users')->where('id', '<=', $uyismin)
       //
    $uyisszmin='student';
       $wordCount = DB::table('users')->where('access_level', '<=', $uyisszmin)->count();


 $bently =  DB::table('courses_by_admin')->count();
  $bentily =  DB::table('library_or_store')->count();

return view('all_our_courses', [
    'wordCount' => $wordCount, 
    'users' => $users,
    'bently' => $bently,
    'bentily' => $bentily
]);


//return view('welcome',['wordCount'=>$wordCount],['users'=>$users]);
}


    public function my_courses(Request $request){
  $minions=Auth::user()->id;
$useszwrs = DB::select('select * from tutors_for_courses order by number_of_students desc');
return view('authed_tutor_courses',['useszwrs'=>$useszwrs]);
}


    public function inactive_courses(Request $request){

$users = DB::select('select * from courses_by_admin order by number_of_students desc');
return view('deactivated_courses',['users'=>$users]);
}


    public function all_courses(Request $request){

$users = DB::select('select * from courses_by_admin order by number_of_students desc');
return view('all-courses',['users'=>$users]);
}

        
}
