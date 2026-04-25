<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('products.index', compact('categories'));
    }

    // Show subcategories + products of a category
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $subcategories = $category->children;
        $products = $category->products;
        return view('products.category', compact('category', 'subcategories', 'products'));
    }

    // Show single product
   public function show($slug) 
{
    $product = Product::where('slug', $slug)->firstOrFail();
    return view('frontend.products.show', compact('product'));
}
}
