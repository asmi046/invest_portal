<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'selector',
        'text_id',
        'organ',
        'organ_en',
        'adres',
        'adres_en',
        'person',
        'person_en',
        'dolg',
        'dolg_en',
        'phone',
        'phone_dob',
        'email',
        'vk_lnk',
        'tg_lnk',
        'ok_lnk',
        'web',
        'img'
    ];
}
