<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use constGuards;
use constDafaults;
use App\Models\Admin;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use App\Models\GeneralSetting;


class AdminControler extends Controller
{
    public function loginHandler(Request $request){

       $fieldType =filter_var($request->login_id,FILTER_VALIDATE_EMAIL)?'email' :'username';
       if ($fieldType=='email') {
             $request->validate([
                'login_id'=>'required|email|exists:admins,email',
                'password'=>'required|min:5|max:45'
             ],[
                'login_id.required'=>'Email or Username is required',
                'login_id.email'=>'Invaid email address',
                'login_id.exists'=>'Email is not existe in system',
                'password.required'=>'Password is required'
             ]);
       }else{
        $request->validate([
            'login_id'=>'required|exists:admins,username',
            'password'=>'required|min:5|max:45'
        ],[
                'login_id.required'=>'Email or Username is required',
                'login_id.exists'=>'Username is not existe in system',
                'password.required'=>'Password is required'
        ]);

       }
       $creds=array(
        $fieldType =>$request->login_id,
        'password'=>$request->password
       );
       if(Auth::guard('admin')->attempt($creds)){
        return redirect()->route('admin.home');

       }else{
        session()->flash('fail','Incorrect credemtials');
        return redirect()->route('admin.login');

       }


    }

    public function logoutHandler(Request $request){
        Auth::guard('admin')->logout();
        session()->flash('fail','You are Logged Out!');
        return redirect()->route('admin.login');

     }

     public function sendPasswordResetLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:admins,email',
         ],[
            'email.required'=>'Email is required',
            'email.email'=>'Invaid email address',
            'email.exists'=>'Email is not existe in system',
         ]);
         // get admin details
         $admin =Admin::where('email',$request->email)->first();
         //genery token
         $token=base64_encode(Str::random(64));
         // chek if on existing reset passowrd token
         $oldToken =DB::table('password_resets')
                        ->where(['email'=>$request->email,'guard'=>constGuards::ADMIN])
                        ->first();

        if ($oldToken) {
            //update Token
            $current = Carbon::now();
            DB::table('password_resets')
                        ->where(['email'=>$request->email,'guard'=>constGuards::ADMIN])
                        ->update([
                            'token'=>$token,
                            'created_at'=>$current
                        ]);
        }else{
            //Add new TOKEN
            $current = Carbon::now();
            DB::table('password_resets')->insert([
                'email'=>$request->email,
                'guard'=>constGuards::ADMIN,
                'token' =>$token,
                'created_at'=>$current

            ]);
        }


        $actionlink =route('admin.reset-password',['token'=>$token,'email'=>$request->email]);

        $data =array(
            'actionlink'=>$actionlink,
            'admin'=>$admin
        );
        $mail_body = view('email-templates.admin-forgot-email-template',$data)->render();
        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FORM_ADDRESS'),
            'mail_from_name'=>env('EMAIL_FORM_NAME'),
            'mail_recipient_email'=>$admin->email,
            'mail_recipient_name'=>$admin->name,
            'mail_subject'=>'Reset passeord',
            'mail_body'=>$mail_body
        );
        if(sendEmail($mailConfig)){
            session()->flash('success','We have E-mailed Your Password reset link.');
            return redirect()->route('admin.forgot-password');

        }else {
            session()->flash('fail','Something Went Wrong!');
             return redirect()->route('admin.forgot-password');
        }
     }





     public function resetPassword(Request $request,$token = null){

        $check_token= DB::table('password_resets')
        ->where(['token'=>$token,'guard'=>constGuards::ADMIN])
        ->first();
        if ($check_token) {
             $difMins =Carbon::createFromFormat('Y-m-d H:i:s', $check_token->created_at)->diffInMinutes(Carbon::now());

             //Carbon::createFromFormat('Y-M-D H:i:s',$check_token->created_at)->diffInMinutes(Carbon::now());

             if($difMins > constDafaults::tokenExpiredMinutes){
                //if token expire
                session()->flash('fail','Token expired,request another reset password link ');
            return redirect()->route('admin.forgot-password',['tokin'=>$token]);

             }else{
                return view('back.pages.admin.auth.reset-password')->with(['token'=>$token]);
             }
        } else {
            session()->flash('fail','Invalid Token,request another reset password link ');
            return redirect()->route('admin.forgot-password',['tokin'=>$token]);
        }


     }



     public function resetPasswordHandler(Request $request){
        $request->validate([
            'new_password'=>'required|min:5|max:45|required_with:new_password_confirmation|
            same:new_password_confirmation',
            'new_password_confirmation'=>'required'
         ]);
         $token =DB::table('password_resets')
         ->where(['token'=>$request->token,'guard'=>constGuards::ADMIN])
         ->first();

         // get admin details
         $admin =Admin::where('email',$token->email)->first();



         Admin::where('email',$admin->email)->update([
            'password'=>Hash::make($request->new_password)]);

            //delet Token recode
        DB::table('password_resets')
           ->where([
            'email'=>$admin->email,
            'token'=>$request->token,
            'guard'=>constGuards::ADMIN
            ])->delete();

            //send email to notify admin
            ///////////////////////////////////////
            $data =array(
                'new_password'=>$request->new_password,
                'admin'=>$admin
            );
            $mail_body = view('email-templates.admin-reset-email-template',$data)->render();
            $mailConfig = array(
                'mail_from_email'=>env('EMAIL_FORM_ADDRESS'),
                'mail_from_name'=>env('EMAIL_FORM_NAME'),
                'mail_recipient_email'=>$admin->email,
                'mail_recipient_name'=>$admin->name,
                'mail_subject'=>'Passeord changed',
                'mail_body'=>$mail_body
            );
            //////////////////////////////////



            sendEmail($mailConfig);
            return redirect()->route('admin.login')->with('success',
            'Done! , Your password has been changed. Use new Password to login into system ');


     }

     public function proFileView(Request $request){
        $admin=null;
        if (Auth::guard('admin')->check())
        {
           $admin=Admin::findOrFall(auth()->id());

        }
        return view('back.pages.admin.profile',compact('admin'));
     }

     public function changeProfilePicture(Request $request)
      {
        $admin =Admin::findOrFall(auth('admin')->id());
        $path = 'images/users/admins/';
        $file = $request->file('adminProfilePicturefile');
        $old_picture =$admin->getAttributes()['picture'];
        $file_path =$path.$old_picture;
        $file_name ='ADMIN_IMG_'.rand(2,100).$admin->id.time().uniqid().'.jpg';
        $upload =$file->move(public_path($path),$file_name);

        if ($upload) {
             if($old_picture != null && File::exists(public_path($path.$old_picture))){
                File::delete(public_path(($path.$old_picture)));
             }
             $admin->update(['picture'=>$file_name]);
           return response()->json(['status'=>1,'msg'=>'Your profile picture has been successfule updated.']);

        } else {
           return response()->json(['status'=>0,'msg'=>'Something went weong.']);
        }

     }

     public function changeLogo (Request $request){
        $request->validate([
            'site_logo'=>'required'

         ]);
        $path = 'images/site/';
        $file = $request->file('site_logo');

        $settings = new GeneralSetting();
        $old_logo =$settings->first()->site_logo;
        $file_path =$path.$old_logo;
        $file_getCilent=$request->file('site_logo')->getClientOriginalExtension();
        $file_name ='LOGO_'.uniqid().'.'.$file_getCilent; //getClientOriginalExtension();
        $upload =$file->move(public_path($path),$file_name);

        if ($upload) {
            if($old_logo != null && File::exists(public_path($path.$old_logo))){
               File::delete(public_path(($path.$old_logo)));
            }
            $settings= $settings->first();
            $settings->site_logo = $file_name;
            $update = $settings->save();
          return    response()->json(['status'=>1,'msg'=>'Your profile picture has been successfule updated.']);

       } else {
          return response()->json(['status'=>0,'msg'=>'Something went weong.']);
       }
     }

     public function changeFavicon (Request $request){
        $request->validate([
            'site_favicon'=>'required'

         ]);
        $path = 'images/site/';
        $file = $request->file('site_favicon');

        $settings = new GeneralSetting();
        $old_logo =$settings->first()->site_favicon;
        $file_path =$path.$old_logo;
        $file_getCilent=$request->file('site_favicon')->getClientOriginalExtension();
        $file_name ='LOGO_'.uniqid().'.'.$file_getCilent; //getClientOriginalExtension();
        $upload =$file->move(public_path($path),$file_name);

        if ($upload) {
            if($old_logo != null && File::exists(public_path($path.$old_logo))){
               File::delete(public_path(($path.$old_logo)));
            }
            $settings= $settings->first();
            $settings->site_favicon = $file_name;
            $update = $settings->save();
          return    response()->json(['status'=>1,'msg'=>'Your profile picture has been successfule updated.']);

       } else {
          return response()->json(['status'=>0,'msg'=>'Something went weong.']);
       }
     }



     public function storeCatogry(Request $request)

     {

         $request->validate([
             'name'=>'required',
             'parent_id'=>'nullable',
             'picture'=>'nullable|image|mimes:png,jpg,jpeg|max:2048'

          ]);
          $name=$request->name;
          $parent_id = $request->parent_id;

         $path = 'images/site/';
         $file = $request->file('picture');

         $Categories =  Categorie::create('name',$name,'parent_id',$parent_id)->id();

         $old_logo =$Categories->first()->picture;
         $file_path =$path.$old_logo;
         $file_getCilent=$request->file('picture')->getClientOriginalExtension();
         $file_name ='CATPC_'.uniqid().'.'.$file_getCilent; //getClientOriginalExtension();
         $upload =$file->move(public_path($path),$file_name);


         if ($upload) {
             if($old_logo != null && File::exists(public_path($path.$old_logo))){
                File::delete(public_path(($path.$old_logo)));
             }
             $Categories= $Categories->first();
             $Categories->site_favicon = $file_name;
             $update = $Categories->save();
           return    response()->json(['status'=>1,'msg'=>'Your profile picture has been successfule updated.']);

        } else {
           return response()->json(['status'=>0,'msg'=>'Something went weong.']);
        }
     }

}
