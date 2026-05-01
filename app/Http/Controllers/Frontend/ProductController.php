<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Get all main categories with subcategories
        $categories = Category::whereNull('parent_id')
            ->with('children')
            ->get();

        // Get products filtered by category slug
        $selectedCat = request('cat');

        if ($selectedCat) {
            $category = Category::where('slug', $selectedCat)->first();
            if ($category) {
                // Get products from this category AND its subcategories
                $categoryIds = $category->children->pluck('id')->push($category->id);
                $products = Product::whereIn('category_id', $categoryIds)->get();
            } else {
                $products = collect();
            }
        } else {
            $products = Product::all();
        }

        return view('Frontend.products.index', compact('categories', 'products', 'selectedCat'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Category::whereNull('parent_id')->with('children')->get();
        return view('Frontend.products.show', compact('product', 'categories'));
    }
}
