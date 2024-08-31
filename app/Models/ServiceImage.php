<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    protected $fillable = ['service_id', 'image_path', 'name_ar', 'name_en'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

