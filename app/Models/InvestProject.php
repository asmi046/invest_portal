<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_en',
        'img',
        'slug',
        'files',
        'description',
        'description_en',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
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
