<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    public $table = 'logo';

    protected $fillable = [
        'image',
        'brief_ar',
        'brief_en',
    ];
}
