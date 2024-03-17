<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunitipalStandart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_en',
        'type',
        'slug',
        'title',
        'title_en',
        'glava',
        'glava_en',
        'address',
        'address_en',
        'phone',
        'site',
        'email',
        'folder',
        'gerb',
        'glava_photo',
        'description',
        'description_en',
        'passport_files',
    ];

    protected $casts = [
        "passport_files" => 'object',
    ];

}
