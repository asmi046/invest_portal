<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'organ_en',
        'person',
        'person_en',
        'dolg',
        'dolg_en',
        'phone',
        'phone_dob',
        'email',
        'img',
    ];
}
