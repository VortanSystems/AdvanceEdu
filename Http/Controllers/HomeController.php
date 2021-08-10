<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
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


    public function teach(Request $request)
    {

$users = DB::select('select * from courses_by_admin order by id desc');
return view('apply_to_teach',['users'=>$users]);
         
    }



   


}
