<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GeneralSetting;
use App\Models\SocialNetwork;

class AdminSettings extends Component
{
    public $tab = null;
    public $defualt_tap = 'general_settings';
    protected $queryString = ['tab'];
    public $site_name, $site_email, $site_phone, $site_meta_keywords, $site_meta_descrption, $site_logo, $site_favicon;
    public $facebook_url, $x_url, $whatsapp_url, $youtube_url, $instagram_url, $google_play_url, $apple_stor_url, $telegram_url, $tiktok_url;
    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

    public function mount()
    {
        $this->tab = request()->tap ? request()->tap : $this->defualt_tap;

        //Populate
        $this->site_name = get_settings()->site_name;
        $this->site_email = get_settings()->site_email;
        $this->site_phone = get_settings()->site_phone;
        $this->site_meta_keywords = get_settings()->site_meta_keywords;
        $this->site_meta_descrption = get_settings()->site_meta_descrption;
        $this->site_logo = get_settings()->site_logo;
        $this->site_favicon = get_settings()->site_favicon;
        //Populate
        $this->facebook_url = get_social_network()->facebook_url;
        $this->x_url = get_social_network()->x_url;
        $this->whatsapp_url = get_social_network()->whatsapp_url;
        $this->youtube_url = get_social_network()->youtube_url;
        $this->instagram_url = get_social_network()->instagram_url;
        $this->google_play_url = get_social_network()->google_play_url;
        $this->apple_stor_url = get_social_network()->apple_stor_url;
        $this->telegram_url = get_social_network()->telegram_url;
        $this->tiktok_url = get_social_network()->tiktok_url;
    }
    public function updateGeneralSettings()
    {
        $this->validate([
            'site_name' => 'required',
            'site_email' => 'required|email'
        ]);
        $settings = new GeneralSetting();
        $settings = $settings->first();
        $settings->site_name = $this->site_name;
        $settings->site_email = $this->site_email;
        $settings->site_phone = $this->site_phone;
        $settings->site_meta_keywords = $this->site_meta_keywords;
        $settings->site_meta_descrption = $this->site_meta_descrption;
        $update = $settings->save();

        if ($update) {
            $this->showToastr('success', 'General Settings Have been successfully Updated.');
        } else {
            $this->showToastr('error', 'Something went wrong.');
        }
    }
    public function showToastr($type, $message)
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message

        ]);
        // return redirect()->with($type,$message);

    }


    public function updateSocialNetworks()
    {

        $socialnetworks = new SocialNetwork();
        $socialnetworks = $socialnetworks->first();
        $socialnetworks->facebook_url = $this->facebook_url;
        $socialnetworks->x_url = $this->x_url;
        $socialnetworks->whatsapp_url = $this->whatsapp_url;
        $socialnetworks->youtube_url = $this->youtube_url;
        $socialnetworks->instagram_url = $this->instagram_url;
        $socialnetworks->google_play_url = $this->google_play_url;
        $socialnetworks->apple_stor_url = $this->apple_stor_url;
        $socialnetworks->telegram_url = $this->telegram_url;
        $socialnetworks->tiktok_url = $this->tiktok_url;

        $update = $socialnetworks->save();

        if ($update) {
            $this->showToastr('success', 'Social Network Have been successfully Updated.');
        } else {
            $this->showToastr('error', 'Something went wrong.');
        }
    }

    public function render()
    {
        return view('livewire.admin-settings');
    }
}
