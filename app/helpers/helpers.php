<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\GeneralSetting;
use App\Models\SocialNetwork;
use GuzzleHttp\Psr7\Request;
use App\Models\Categorie;

/** دالة ارسال الايميل باستحدام البرمترات */
if(!function_exists('sendEmail')){
    function sendEmail($mailConfig){

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->SMTPDebug=0;
        $mail->isSMTP();
        $mail->Host= env('EMAIL_HOST');
        $mail->SMTPAuth=true;
        $mail->Username=env('EMAIL_USERNAME');
        $mail->Password=env('EMAIL_PASSWORD');
        $mail->SMTPSecure=env('EMAIL_ENCRYPTION');
        $mail->Port=env('EMAIL_PORT');
        $mail->setFrom($mailConfig['mail_from_email'],$mailConfig['mail_from_name']);
        $mail->addAddress($mailConfig['mail_recipient_email'],$mailConfig['mail_recipient_name']);
        $mail->IsHTML(true);
        $mail->Subject=$mailConfig['mail_subject'];
        $mail->Body=$mailConfig['mail_body'];
        if($mail->send()){
            return true;
        }else{
            return false;
        }

    }

}


////////Get General Setting //////////////////

if ( !function_exists('get_settings')) {
    function get_settings(){
        $results =null;
        $settings = new GeneralSetting();
        $settings_data = $settings->first();

        if($settings_data)
        {
            $results = $settings_data;
        }else{
            $settings->insert([
                'site_name'=>'Live Tach',
                'site_email'=>'info@livetach.test'

            ]);
            $new_settings_date =$settings->first();
            $results = $new_settings_date;
        }
        return $results;

    }
}
//////////////////////SocialNetwork//////////////////////////

if ( !function_exists('get_social_network')) {
    function get_social_network(){
        $results =null;
        $social_network = new SocialNetwork();
        $social_network_data = $social_network->first();

        if($social_network_data)
        {
            $results = $social_network_data;
        }else{
            $social_network->insert([
                'facebook_url'=>null,
                'x_url'=>null,
                'whatsapp_url'=>null,
                'youtube_url'=>null,
                'instagram_url'=>null,
                'google_play_url'=>null,
                'apple_stor_url'=>null,
                'telegram_url'=>null,
                'tiktok_url'=>null

            ]);
            $new_social_network_data =$social_network->first();
            $results = $new_social_network_data;
        }
        return $results;

    }
}
//////////////////////SocialNetwork//////////////////////////

if ( !function_exists('get_price_RY')) {
    function get_price_RY($price){
        $results=$price*530;
        return $results;

    }
}

if ( !function_exists('get_catogry')) {
    function get_catogry($cat){
        if($cat>=1){
            $foot_catogry=Categorie::tree()->random($cat);
        }elseif($cat == 0 ){
            $foot_catogry=Categorie::tree();
        }


        return $foot_catogry;

    }
}

