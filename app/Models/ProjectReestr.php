<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectReestr extends Model
{
    use HasFactory;

    public $fillable = [
        'slug',
        'img',
        'presentation',

        'state',
        'location',

        'title',
        'title_en',

        'investor',
        'investor_en',

        'period',
        'period_en',
        'price',
        'work_places',

        'description',
        'description_en',

        'seo_title',
        'seo_description',
    ];
}
