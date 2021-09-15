<?php

namespace App\Http\Controllers;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class courseAddController extends Controller
{
    //






     public function insert(){
      
        return view('add-course');
    }
    public function create(Request $request){

       $rules = [
			'course_title' => 'required|string|min:3|max:255',
			'course_sub_title' => 'required|string|min:3|max:255',
			'course_status' => 'required|string|min:3|max:255',
			'sub_description' => 'required|string|min:3|max:255',
			'course_description' => 'required|string|min:50',
			'price' => 'required|integer',
			'preview_image'=>'required|Mimes:jpeg,jpg,gif,png,webp| dimensions:width=800,height=650',

			
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('add-course')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$file = $request->file('preview_image');
				$filename=$file->getClientOriginalName();
				$destinationPath = 'uploads';
				$file->move($destinationPath,$file->getClientOriginalName());
				$student = new StudInsert;
                $student->course_name = $data['course_title'];
                $student->course_sub_title = $data['course_sub_title'];
				$student->course_short_escription = $data['sub_description'];
				$student->course_description = $data['course_description'];
				$student->course_status = $data['course_status'];
				$student->course_price = $data['price'];
				$student->preview_image = $filename;
				$student->save();
				return redirect('add-course')->with('message',"Course Added successfully");
			}
			catch(Exception $e){
				return redirect('add-course')->with('errors',"operation failed");
			}
		}
    }






}
