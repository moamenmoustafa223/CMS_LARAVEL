<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'text',
        'title_ar',
        'title_en',
        'description1_ar',
        'description1_en',
        'description2_ar',
        'description2_en',
    ];
}
