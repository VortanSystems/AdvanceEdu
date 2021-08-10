<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class courseUpdateController extends Controller
{
    //


	public function index(){
$users = DB::select('select * from courses_by_admin');
return view('update_course',['users'=>$users]);
}
public function show($id) {
$users = DB::select('select * from courses_by_admin where id = ?',[$id]);
return view('update_course',['users'=>$users]);
}
public function edit(Request $request,$id) {

$file = $request->file('preview_image');
$filename=$file->getClientOriginalName();
$destinationPath = 'uploads';
$file->move($destinationPath,$file->getClientOriginalName());	
$course_name = $request->input('course_title');
$course_sub_title = $request->input('course_sub_title');
$course_short_escription = $request->input('sub_description');
$course_description = $request->input('course_description');
$course_status = $request->input('course_status');
$courseprice = $request->input('price');
$preview_image = $filename;



DB::update('update courses_by_admin set course_name = ?,course_sub_title=?,course_short_escription=?,course_description=? ,preview_image=?,course_status=?,course_price=? where id = ?',[$course_name,$course_sub_title,$course_short_escription,$course_description,$preview_image,$course_status,$courseprice,$id]);

return  back()->with('message',"Course Updated successfully");

}






}
