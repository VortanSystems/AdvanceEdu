<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class profileController extends Controller
{
    //


	public function index(){

return view('profile');
}


        public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255',
             'phone'=>'required|string|max:255',
              'address'=>'required|string|max:255',
        ]);
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->save();
        return back()->with('message','Profile Updated');
    }


public function update_password(Request $request)
{
    

  

            $request->validate([

            'old_password' => ['required','min:8', new MatchOldPassword],

            'new_password' => ['required','min:8',],

            'confirm_new_password' => ['same:new_password','min:8',],

        ]);

   

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return back()->with('message','Password Updated Successfully');



}

}





