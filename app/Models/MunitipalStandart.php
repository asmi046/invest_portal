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
        'phone',
        'site',
        'email',
        'description',
        'description_en',
    ];

}
