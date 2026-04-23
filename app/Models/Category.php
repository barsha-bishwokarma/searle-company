<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id'];

    // Main category has many subcategories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Subcategory belongs to main category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
