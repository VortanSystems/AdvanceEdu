<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\applyToTeach;
use App\Models\approveTutuor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class appliedToTeachController extends Controller
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


       public function index(Request $request)
    {


if((Auth::user()->access_level)=='admin')
{
         $minions='tutor';
        $tutorapplics = DB::select('select * from users where access_level="'.$minions.'"  order by number_of_students desc');
        return view('tutors',['tutorapplics'=>$tutorapplics]);
}


else
{       
        $minions='tutor';
        $tutorapplics = DB::select('select * from users where access_level="'.$minions.'"  order by number_of_students desc');
        return view('tutors',['tutorapplics'=>$tutorapplics]);
}




        
        
    }


       public function all_tutors(Request $request)
    {

 
         $minions='tutor';
        $tutorapplics = DB::select('select * from users where access_level="'.$minions.'"  order by number_of_students desc');
        return view('all_tutors',['tutorapplics'=>$tutorapplics]);
 


        
        
    }


           public function tutors(Request $request)
    {

        /* For Pending and other modificationa 

         $apps='pending';
        $tutorapplics = DB::select('select * from course_applications where application_status="'.$apps.'" order by id ASC');


*/


        $tutorapplics = DB::select('select * from course_applications  order by id DESC');


return view('tutor_applications',['tutorapplics'=>$tutorapplics]);


    	
        
    }

           public function tutor_app_id($id)
    {


        $tutorapplics = DB::select('select * from users where id=?',[$id]);


return view('tutor_details',['tutorapplics'=>$tutorapplics]);



        
        
    }



           public function showsa($id)
    {


        $tutorapplics = DB::select('select * from course_applications where id=?',[$id]);


return view('application_details',['tutorapplics'=>$tutorapplics]);



        
        
    }

    public function edit(Request $request,$id)
    {
        
            $rules=[


                    'application_stats' => 'required',
                    'message' => 'required|string|max:1555|min:150',
                    'course_id' => 'required|integer',
                    'tutor_id' => 'required|integer',
                    'application_id' => 'required|integer',
                ];
                $validator=Validator::make($request->all(),$rules);
                if($validator->fails())
                {

                    return back()->withInput()->witherrors($validator);
                }
                else

                {

                   $data = $request->input();

                    try
                    {

                        //start the approving tutor process

                        $mexim_appstatus = $data['application_stats'];
                        $mexim_message = $data['message'];

                        DB::update('update course_applications set application_status=?,message=? where id=? ',[$mexim_appstatus,$mexim_message,$id]);
                        if($mexim_appstatus=='approved')
                        {
                        $tutors = new approveTutuor;
                        $tutors->course_id = $data['course_id'];
                        $tutors->tutor_id = $data['tutor_id'];
                        $tutors->applicationId = $data['application_id'];
                        $tutors->tutor_status = 'active';
                        $tutors->number_of_students = '0';
                        $tutors->save();
                         return back()->with('message',"Tutor Approved successfully");
                     }






                    }

                    catch(Exception $e){
                return  back()->with('errors',"Operation Failed");
                
            }
                }






    }

       public function active_tutors_list(Request $request)
    {

 
     
             $minions='tutor';
        $tutorapplics = DB::select('select * from users where access_level="'.$minions.'"  order by number_of_students desc');
         
        return view('active_tutors',['tutorapplics'=>$tutorapplics]);
 



        
        
    }


           public function approved_tutor_details($id)
    {


        $tutorapplics = DB::select('select * from users where id=?',[$id]);


return view('approved_tutor_details',['tutorapplics'=>$tutorapplics]);



        
        
    }
    
}
