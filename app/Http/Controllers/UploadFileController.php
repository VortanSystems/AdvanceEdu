<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller
{
    //

	public function index(){

return view('profile');
}


public function showUploadFile(Request $request){
$file = $request->file('image');
/*//Display File Name
echo 'File Name: '.$file->getClientOriginalName();
echo '
';
//Display File Extension
echo 'File Extension: '.$file->getClientOriginalExtension();
echo '
';
//Display File Real Path
echo 'File Real Path: '.$file->getRealPath();
echo '
';
//Display File Size
echo 'File Size: '.$file->getSize();
echo '
';
//Display File Mime Type
echo 'File Mime Type: '.$file->getMimeType();
//Move Uploaded File
*/
$filename=$file->getClientOriginalName();
$destinationPath = 'uploads';
  $rules = [
			'image' => 'required|Mimes:jpeg,jpg,gif,png| dimensions:width=350,height=500',
			

			
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}

		else

		{


$file->move($destinationPath,$file->getClientOriginalName());


//save profile information
$user =Auth::user();
        $user->profile_photo = $filename;
        
        $user->save();
        return back()->with('message','Profile Picture Updated');



		}





}




}
