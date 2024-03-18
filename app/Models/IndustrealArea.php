<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrealArea extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'img',
        'uk_lnk',
        'uk_name',
        'uk_name_en',
        'btn_lnk',
        'rezident_count',
        'free_area',
    ];
}
