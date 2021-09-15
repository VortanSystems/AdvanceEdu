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

class eventsController extends Controller
{
    
    public function events(Request $request)
    {
    	return view('events');
    }
}
