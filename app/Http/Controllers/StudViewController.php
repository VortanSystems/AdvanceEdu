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

class StudViewController extends Controller
{
    public function student_id(Request $request,$id)
    {
    	

    	        $tutorapplics = DB::select('select * from users where access_level="student" && id=?',[$id]);


return view('student_details',['tutorapplics'=>$tutorapplics]);



        
        
    }

    public function edit(Request $request,$id)
    {
    	





    	$rules=[

    		'user_status_activity'=>'required|string',
    		'access_level'=>'required|string',
    		'name'=>'required|string',
    		'email'=>'required|string',
    		'phone'=>'required|string',
    		'address'=>'required|string',
    		'image' => 'required|Mimes:jpeg,jpg,gif,png| dimensions:width=350,height=500',
    	];


    	$validator=Validator::make($request->all(),$rules);
    	if($validator->fails())

    	{
    		return back()->withInput()->witherrors($validator);
    	}

    	else

    	{

    		$data=$request->input();
    		try
    		{	

    			
				$file = $request->file('image');
				$filename=$file->getClientOriginalName();
    			$destinationfolder="uploads";
    			$file->move($destinationfolder,$filename);
    			$user_status_activity=$data['user_status_activity'];
    			$access_level=$data['access_level'];
    			$name=$data['name'];
    			$email=$data['email'];
    			$phone=$data['phone'];
    			$address=$data['address'];
    			$profile_photo=$filename;
    			
    			$updateuserinfo=DB::update('update users set name=?,email=?,phone=?,address=?,access_level=?,user_status_activity=?,profile_photo=? where id=? ',[$name,$email,$phone,$address,$access_level,$user_status_activity,$profile_photo,$id]);
    			if($updateuserinfo)

    			{
	return back()->with('message','User Information Updated Successfully');

    			}
    			else
    			{
return back()->with('errors','Operation Failed');

    			}
    		






    		}
    		catch(Exeception $e)
    		{

    			return back()->with('errors','Operation Failed');
    		}
    	}








    }


     
}
