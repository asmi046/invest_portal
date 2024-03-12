<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolResurs extends Model
{
    use HasFactory;

    protected $fillable = [
        'lnk',
        'title',
        'img'
    ];
}
