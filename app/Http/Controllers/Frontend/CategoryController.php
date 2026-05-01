<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id'];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
