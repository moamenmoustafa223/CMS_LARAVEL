<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'slug',
        'description_ar',
        'description_en',
        'image',
        'meta_tags_ar',
        'meta_tags_en',
        'meta_description_ar',
        'meta_description_en',
    ];
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name_en);
            }
        });
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/services/' . $this->image);
    }
}
