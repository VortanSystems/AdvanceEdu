<?php
namespace App\Http\Controllers;
use DB;
use App\Models\applyToTeach;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class applyToTeachController extends Controller
{
    

 public function create(Request $request){

       $rules = [
            'course_id' => 'required|string',
            'tutor_id' => 'required|string',
            
           

            
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {


            return back()
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            try{


                $filecv = $request->file('cv_name');
                $filenamecv=$filecv->getClientOriginalName();
                $destinationPathcv = 'uploads/cvs_a';
                $filecv->move($destinationPathcv,$filecv->getClientOriginalName());



                $fileid = $request->file('identifications');
                $filenameid=$fileid->getClientOriginalName();
                $destinationPathid = 'uploads/ids';
                $fileid->move($destinationPathid,$fileid->getClientOriginalName());



                $student = new applyToTeach;
                $student->course_id = $data['course_id'];
                $student->tutor_id = $data['tutor_id'];
                $student->cv_name = $filenamecv;
                $student->identifications = $filenameid;
                $student->number_of_students='0';
                $student->application_status='pending';
                $student->save();
                return back()->with('message',"Application Submitted successfully");
            }
            catch(Exception $e){
            	return  back()->with('errors',"Operation Failed");
                
            }
        }
    }





}
