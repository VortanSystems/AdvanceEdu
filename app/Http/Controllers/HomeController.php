<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\applyToTeach;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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


    public function show($id)
    {

$useris = DB::select('select * from courses_by_admin where id = ?',[$id]);
return view('apply_to_teach',['useris'=>$useris]);
         
    }
public function users_list(Request $request)
{
   

 
        $tutorapplics = DB::select('select * from users order by id desc');
        return view('users',['tutorapplics'=>$tutorapplics]);


}

public function students(Request $request)
{
   

         $minions='student';
        $tutorapplics = DB::select('select * from users where access_level="'.$minions.'"  order by number_of_students desc');
        return view('all_students',['tutorapplics'=>$tutorapplics]);


}


public function users_edit($id)
{
   

         
        $users = DB::select('select * from users   order by id desc');
        return view('edit_user',['users'=>$users]);


}


   public function my_applications_tutor(Request $request)
{
   

         $minions=Auth::user()->id;
        $tutorapplics = DB::select('select * from course_applications where tutor_id="'.$minions.'" order by id desc');
        return view('all_tutor_applications',['tutorapplics'=>$tutorapplics]);


}


    public function determin_tutor_status(Request $request)
    {

  $minions=Auth::user()->id;
        $tutoraapplics = DB::select('select * from tutors_for_courses where tutor_id="'.$minions.'" ');
        return view('home',['tutoraapplics'=>$tutoraapplics]);
    }


}
