<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseViewController extends Controller
{
    //


    public function index(Request $request){

$users = DB::select('select * from courses_by_admin order by id desc');
return view('courses',['users'=>$users]);
}


}
