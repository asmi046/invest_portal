<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneWinReglament extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'dey_to_reac',
        'comment',
        'comment_en',
        'snoska',
        'snoska_en',
    ];
}
