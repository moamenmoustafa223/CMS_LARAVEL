<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $article->slug = $article->generateSlug();
        });
    }

    public function generateSlug()
    {
        return Str::slug($this->title);
    }
}
