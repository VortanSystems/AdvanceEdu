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


class systemsController extends Controller
{
    
    public function system(Request $request)
    {

    	$get_sys_data=DB::select('select * from system_settings_general ');
    	return view('system',['get_sys_data'=>$get_sys_data]);
    }


        public function features_activation(Request $request)
    {
    	return view('features_activation');
    }

    public function general_data_update(Request $request)
    {
    		
    		$rules=[
    			'institutionname'=>'string|required',
    			'phone'=>'string|required',
    			'email'=>'string|required',
    			'physicaladdress'=>'string|required',
    			'copyright'=>'string|required',
    			'mission'=>'string|required|max:300',
    			'brief'=>'string|required|max:550',
    		];

    		$validator = Validator::make($request->all(),$rules);
    		if($validator->fails())
    		{
    			return back()->withInput()->withErrors($validator);
    		}

    		else
    		{


    			$institution=$request->input('institutionname');
    			$phone=$request->input('phone');
    			$email=$request->input('email');
    			$address=$request->input('physicaladdress');
    			$copyrights=$request->input('copyright');
    			$mission=$request->input('mission');
    			$briefs=$request->input('brief');

    			DB::update('update system_settings_general set site_name=?, site_phone=?, support_email=?, address=?,copyright_text=?,site_mission=?,site_brief=?',[$institution,$phone,$email,$address,$copyrights,$mission,$briefs]);

    			 

    					return back()->with('message','System Data Updated Successfully');

    			 
    		 
    		}

    }

    public function seo_update(Request $request)
    {
       
        $metaimagea = $request->file('metaimage');
        $faviconnamea = $request->file('metafavicon');
        $logonamed = $request->file('metalogo');
        $logoblack = $request->file('metalogo_black');

        
        $upload_location="uploads/meta";
        $imagename=$metaimagea->getClientOriginalName();
        $faviconname=$faviconnamea->getClientOriginalName();
        $logoname=$logonamed->getClientOriginalName();
        $blacklogoname=$logoblack->getClientOriginalName();



       $rules=[

                'metatitle'=>'required|min:10',
                'metaimage'=>'required|Mimes:jpeg,jpg,gif,png,webp',
                'metafavicon'=>'required|Mimes:jpeg,jpg,gif,png,webp|dimensions:width=50,height=50',
                'metalogo'=>'required|Mimes:jpeg,jpg,gif,png,webp|dimensions:width=211,height=57',
                'metalogo_black'=>'required|Mimes:jpeg,jpg,gif,png,webp|dimensions:width=211,height=57',
                'metadescription'=>'required',
                'metakeywords'=>'required',
       ];

       $validator = Validator::make($request->all(),$rules);

       if($validator->fails())

       {
        return back()
                ->withInput()
                ->withErrors($validator);
       }

       else
       {

        $metaimagea->move($upload_location,$imagename);
        $faviconnamea->move($upload_location,$faviconname);
        $logonamed->move($upload_location,$logoname);
        $logoblack->move($upload_location,$blacklogoname);        
        $metatitle=$request->input('metatitle');
        $metaimage=$imagename;
        $metafavicon=$faviconname;
        $metalogo=$logoname;
        $metalogo_black=$blacklogoname;
        $metadescription=$request->input('metadescription');
        $metakeywords=$request->input('metakeywords');

        $nimphony = DB::update('update system_settings_general set metatitle=?,metaimage=?,metafavicon=?,metalogo=?,metadescription=?,metakeywords=?,meta_black_logo=?',[$metatitle,$metaimage,$metafavicon,$metalogo,$metadescription,$metakeywords,$metalogo_black]);

        if($nimphony)
        {
            return back()->with('message','SEO Data Updated Successfully');
        }

        else
        {
            return back()->with('errors','Operation Failed');
        }






       }
    }

    public function env_update(Request $request)
    {
        


        $rules=[
            'pubkey'=>'required',
            'seckey'=>'required',
            'enckey'=>'required',
            'platform'=>'required',

        ];
        $validator=Validator::make($request->all(),$rules);

        if($validator->fails())
        {

            return back()->witherrors()->withInput($validator);
        }

        else

        {

            //update the .env keys controller

            $mexicuty=putenv("APP_ENV=local");

            if($mexicuty)
            {
                $environment=$request->input('platform');
                $publics=$request->input('pubkey');
                $secrets=$request->input('seckey');
                $encryption=$request->input('enckey');
                 

   $change_variable=file_put_contents(app()->environmentFilePath(), str_replace(
        $publics . '=' . env('PUBLIC_KEY'),
         $secrets . '=' . env('SECRET_KEY'),
         $encryption . '=' . env('ENCRYPTION_KEY'),
        //$key . '=' . $value,
        file_get_contents(app()->environmentFilePath())
    ));

                  /*  putenv("PUBLIC_KEY=$publics");
                    putenv("SECRET_KEY=$secrets");
                    putenv("ENCRYPTION_KEY=$encryption");
                    putenv("ENV=$environment");
                    putenv("APP_ENV=production");
*/
     if($change_variable){
                return back()->with('message','Payment Information Updated Successfully');
                }
            }
        }
    }




    public function update_card_one(Request $request)
    {   
        $image=$request->file('landingimage');
        $destination="uploads/cards";
        $image_name=$image->getClientOriginalName();
                    
            $rules=[
                'landingtitle'=>'string|required|max:25',
                'landing_text'=>'string|required',
                'landingimage'=>'Mimes:jpg,jpeg,png,gif,webp|required|dimensions:width=700,height=430',
              
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            else
            {

                $image->move($destination,$image_name);
                $landingtitle=$request->input('landingtitle');
                $landing_text=$request->input('landing_text');
                $fimage=$image_name;
              

                DB::update('update system_settings_general set landing_card_title_1=?, landing_card_text_1=?,   landing_card_image_1=?',[$landingtitle,$landing_text,$fimage]);

                 

                        return back()->with('message','Landing Card Updated Successfully');

                 
             
            }
    }










    public function update_card_two(Request $request)
    {   
        $image=$request->file('landingimage');
        $destination="uploads/cards";
        $image_name=$image->getClientOriginalName();
                    
            $rules=[
                'landingtitle'=>'string|required|max:25',
                'landing_text'=>'string|required',
                'landingimage'=>'Mimes:jpg,jpeg,png,gif,webp|required|dimensions:width=700,height=430',
              
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            else
            {

                $image->move($destination,$image_name);
                $landingtitle=$request->input('landingtitle');
                $landing_text=$request->input('landing_text');
                $fimage=$image_name;
              

                DB::update('update system_settings_general set landing_card_title_2=?, landing_card_text_2=?,   landing_card_image_2=?',[$landingtitle,$landing_text,$fimage]);

                 

                        return back()->with('message','Landing Card Updated Successfully');

                 
             
            }
    }















    public function update_card_three(Request $request)
    {   
        $image=$request->file('landingimage');
        $destination="uploads/cards";
        $image_name=$image->getClientOriginalName();
                    
            $rules=[
                'landingtitle'=>'string|required|max:25',
                'landing_text'=>'string|required',
                'landingimage'=>'Mimes:jpg,jpeg,png,gif,webp|required|dimensions:width=700,height=430',
              
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            else
            {

                $image->move($destination,$image_name);
                $landingtitle=$request->input('landingtitle');
                $landing_text=$request->input('landing_text');
                $fimage=$image_name;
              

                DB::update('update system_settings_general set landing_card_title_3=?, landing_card_text_3=?,   landing_card_image_3=?',[$landingtitle,$landing_text,$fimage]);

                 

                        return back()->with('message','Landing Card Updated Successfully');

                 
             
            }
    }







    public function slider_one_update(Request $request)
    {   
        $image=$request->file('slider_one_image');
        $destination="uploads/sliders";
        $image_name=$image->getClientOriginalName();
                    
            $rules=[
                'slider_one_title'=>'string|required|max:35',
                'slider_one_title_large'=>'string|required|max:28',
                'slider_one_button_1_text'=>'string|required|max:15',
                'slider_one_button_1_link'=>'string|required',
                'slider_one_button_2_text'=>'string|required|max:15',
                'slider_one_button_2_link'=>'string|required',
                'slider_one_sub_title'=>'string|required|max:150',
                'slider_one_image'=>'Mimes:jpg,jpeg,png,gif,webp|required|dimensions:width=2000,height=1125',
              
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            else
            {

                $image->move($destination,$image_name);
                $slider_one_title=$request->input('slider_one_title');
                $slider_one_title_large=$request->input('slider_one_title_large');
                $slider_one_button_1_text=$request->input('slider_one_button_1_text');
                $slider_one_button_1_link=$request->input('slider_one_button_1_link');
                $slider_one_button_2_text=$request->input('slider_one_button_2_text');
                $slider_one_button_2_link=$request->input('slider_one_button_2_link');
                $slider_one_sub_title=$request->input('slider_one_sub_title');
                $slider_one_image=$image_name;
                
               
              

                DB::update('update system_settings_general set slider_one_title=?, 
                    slider_one_title_large=?,   
                    slider_one_button_1_text=?,
                   slider_one_button_1_link=?, 
                  slider_one_button_2_text=?,  
                 slider_one_button_2_link=?,
                 slider_one_sub_title=?, 
                  slider_one_image=?',
                  [$slider_one_title,$slider_one_title_large,$slider_one_button_1_text,$slider_one_button_1_link,$slider_one_button_2_text,$slider_one_button_2_link,$slider_one_sub_title,$slider_one_image]);

                 

                        return back()->with('message','Slider One Updated Successfully');

                 
             
            }
    }









public function slider_two_update(Request $request)
    {   
        $image=$request->file('slider_one_image');
        $destination="uploads/sliders";
        $image_name=$image->getClientOriginalName();
                    
            $rules=[
                'slider_one_title'=>'string|required|max:35',
                'slider_one_title_large'=>'string|required|max:28',
                'slider_one_button_1_text'=>'string|required|max:15',
                'slider_one_button_1_link'=>'string|required',
                'slider_one_button_2_text'=>'string|required|max:15',
                'slider_one_button_2_link'=>'string|required',
                'slider_one_sub_title'=>'string|required|max:150',
                'slider_one_image'=>'Mimes:jpg,jpeg,png,gif,webp|required|dimensions:width=2000,height=1125',
              
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            else
            {

                $image->move($destination,$image_name);
                $slider_one_title=$request->input('slider_one_title');
                $slider_one_title_large=$request->input('slider_one_title_large');
                $slider_one_button_1_text=$request->input('slider_one_button_1_text');
                $slider_one_button_1_link=$request->input('slider_one_button_1_link');
                $slider_one_button_2_text=$request->input('slider_one_button_2_text');
                $slider_one_button_2_link=$request->input('slider_one_button_2_link');
                $slider_one_sub_title=$request->input('slider_one_sub_title');
                $slider_one_image=$image_name;
                
               
              

                DB::update('update system_settings_general set slider_two_title=?, 
                    slider_two_title_large=?,   
                    slider_two_button_1_text=?,
                    slider_two_button_1_link=?, 
                  slider_two_button_2_text=?,  
                 slider_two_button_2_link=?,
                    slider_two_sub_title=?, 
                  slider_two_image=?',
                  [$slider_one_title,$slider_one_title_large,$slider_one_button_1_text,$slider_one_button_1_link,$slider_one_button_2_text,$slider_one_button_2_link,$slider_one_sub_title,$slider_one_image]);

                 

                        return back()->with('message','Slider Two Updated Successfully');

                 
             
            }
    }















public function slider_three_update(Request $request)
    {   
        $image=$request->file('slider_one_image');
        $destination="uploads/sliders";
        $image_name=$image->getClientOriginalName();
                    
            $rules=[
                'slider_one_title'=>'string|required|max:35',
                'slider_one_title_large'=>'string|required|max:28',
                'slider_one_button_1_text'=>'string|required|max:15',
                'slider_one_button_1_link'=>'string|required',
                'slider_one_button_2_text'=>'string|required|max:15',
                'slider_one_button_2_link'=>'string|required',
                'slider_one_sub_title'=>'string|required|max:150',
                'slider_one_image'=>'Mimes:jpg,jpeg,png,gif,webp|required|dimensions:width=2000,height=1125',
              
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            else
            {

                $image->move($destination,$image_name);
                $slider_one_title=$request->input('slider_one_title');
                $slider_one_title_large=$request->input('slider_one_title_large');
                $slider_one_button_1_text=$request->input('slider_one_button_1_text');
                $slider_one_button_1_link=$request->input('slider_one_button_1_link');
                $slider_one_button_2_text=$request->input('slider_one_button_2_text');
                $slider_one_button_2_link=$request->input('slider_one_button_2_link');
                $slider_one_sub_title=$request->input('slider_one_sub_title');
                $slider_one_image=$image_name;
                
               
              

                DB::update('update system_settings_general set slider_three_title=?, 
                    slider_three_title_large=?,   
                    slider_three_button_1_text=?,
                    slider_three_button_1_link=?, 
                  slider_three_button_2_text=?,  
                 slider_three_button_2_link=?,
                    slider_three_sub_title=?, 
                  slider_three_image=?',
                  [$slider_one_title,$slider_one_title_large,$slider_one_button_1_text,$slider_one_button_1_link,$slider_one_button_2_text,$slider_one_button_2_link,$slider_one_sub_title,$slider_one_image]);

                 

                        return back()->with('message','Slider Three Updated Successfully');

                 
             
            }
    }







}
