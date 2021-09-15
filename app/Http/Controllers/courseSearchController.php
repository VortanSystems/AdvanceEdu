<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseSearchController extends Controller
{
    //


    public function find_course(Request $request)
    {
    	# code...

    	$search=$request->input('search');

    	//search title and description columns for key words

    	$courses=DB::select("SELECT * FROM courses_by_admin WHERE course_name LIKE '%$search%' || course_description LIKE '%$search%' ");

    	return view('course_search',['courses'=>$courses]);
    }




    public function outersearch(Request $request)
    {
    	# code...

    	$search=$request->input('search');

    	//search title and description columns for key words

    	$courses=DB::select("SELECT * FROM courses_by_admin WHERE course_name LIKE '%$search%' || course_description LIKE '%$search%' ");

    	return view('course_searches',['courses'=>$courses]);
    }
}
