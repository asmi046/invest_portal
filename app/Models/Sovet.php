<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sovet extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_en',
        'pologenie',
        'pologenie_title',
        'pologenie_title_en',
        'sostav',
        'work_planes',
        'protocols',
        'video',

        'description',
        'description_en',

        'seo_title',
        'seo_description'
    ];

    protected $casts = [
        'sostav' => 'array',
        'work_planes' => 'array',
        'protocols' => 'array',
        'video' => 'array',
        "files" => 'array',
    ];

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
