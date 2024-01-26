<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminProfileTaps extends Component
{

    public $tab=null;
    public $tabname='personal_details';
    protected $queryString= ['tab'];
    public $name,$email,$username,$admin_id;
    public $new_password_confrimation,$new_password ,$current_password;

    public function selectTab($tab){
        $this->tab = $tab;
    }
    public function mount(){
        $this->tab = request()->tap ? request()->tap:$this->tabname;
        if(Auth::guard('admin')->check()){
            $admin=Admin::findOrFail(auth()->id());
            $this->admin_id = $admin->id;
            $this->name = $admin->name;
            $this->email = $admin->email;
            $this->username =$admin->username;

        }
    }
    public function updateAdminPersonalDetals(){
       $this->validate([
        'name'=>'required|min:5',
        'email'=>'required|email|unique:admins,email,'.$this->admin_id,
        'username'=>'required|min:3|unique:admins,username,'.$this->username
       ]);
       Admin::find($this->admin_id)->update([
        'name'=>$this->name,
        'email'=>$this->email,
        'username'=>$this->username

       ]);

       $this->emit('updateAdminSellerHeaderInfo');
       $this->dispatchBrowserEvent('updateAdminInfo',[
        'name'=>$this->name,
        'email'=>$this->email,
        'username'=>$this->username


    ]);
        $this->showToastr('success','Your Personal Details Have been successfully Updated.');
      // return redirect()->with('success','Your Personal Details Have been successfully Updated.');

    }
    public function showToastr($type,$message) {
       return $this->dispatchBrowserEvent('showToastr',[
           'type'=>$type,
           'message'=>$message

        ]);
      // return redirect()->with($type,$message);

    }

    public function updatePassword(){
        $this->validate([
            'current_password'=>[
                'required',function($attribute, $value,$fail){
                    if (!Hash::check($value , Admin::find(auth('admin')->id())->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                }
            ],
            'new_password'=>'required|min:5|max:45|required_with:new_password_confrimation|same:new_password_confrimation'


           ]);

           $query =Admin::findOrFail(auth('admin')->id())->update([
            'password'=>Hash::make($this->new_password)
           ]);

           if ($query) {
            $_admin=Admin::findOrFail($this->admin_id);


            /////////////send email to notify admin////////////////////////////
            $data =array(
                'new_password'=>$this->new_password,
                'admin'=>$_admin
            );
            $mail_body = view('email-templates.admin-reset-email-template',$data)->render();
            $mailConfig = array(
                'mail_from_email'=>env('EMAIL_FORM_ADDRESS'),
                'mail_from_name'=>env('EMAIL_FORM_NAME'),
                'mail_recipient_email'=>$_admin->email,
                'mail_recipient_name'=>$_admin->name,
                'mail_subject'=>'Passeord changed',
                'mail_body'=>$mail_body
            );

            sendEmail($mailConfig);
            /////////////////End send email to notify admin///////////////////

            $this->current_password = $this->new_password =$this->new_password_confrimation =null;
             $this->showToastr('success','Password successfully Changed.');

           }else{
            $this->showToastr('error','Something went wrong.');

           }
    }
    public function render()
    {
        return view('livewire.admin-profile-taps');
    }
}
