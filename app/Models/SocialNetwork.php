<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;



    protected $fillable = [
        'facebook_url',
        'x_url',
        'whatsapp_url',
        'youtube_url',
        'instagram_url',
        'google_play_url',
        'apple_stor_url',
        'telegram_url',
        'tiktok_url'

    ];
}
