<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'template',
        'img',
        'description',
        'images',
        'files',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
        "files" => 'array',
        "images" => 'array'
    ];


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }

}
