<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    use HasFactory;
    protected $table = "app_settings";
    protected $primaryKey = "app_setting_id";
    protected $fillable = [
        'en_peronal_name',
        'ar_peronal_name',
        'en_peronal_desc',
        'ar_peronal_desc',
        'en_job_title',
        'ar_job_title',
        'en_skills',
        'ar_skills',
        'en_contactWithUs_message',
        'ar_contactWithUs_message',
        'email',
        'phone',
        'small_personal_pic',
        'big_personal_pic',
        'facebook',
        'twitter',
        'instagram',
        'linkedIn',
        'location',
    ];
}
