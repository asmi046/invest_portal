<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionParametr extends Model
{
    use HasFactory;

    protected $fillable = [
        "type",
        "type_en",
        "parametr",
        "parametr_en",
        "data_param",
        "data_param_en",
        "parametr_name",
        "parametr_name_en",
        "direction",
    ];
}
