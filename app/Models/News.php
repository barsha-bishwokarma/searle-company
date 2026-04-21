<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'published_at',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = ['published_at' => 'datetime'];
}
