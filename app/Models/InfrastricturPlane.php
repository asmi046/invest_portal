<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastricturPlane extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_en',
        'month',
        'year',
        'file',
    ];
}
