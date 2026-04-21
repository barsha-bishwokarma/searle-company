<?php

namespace App\Http\Controllers;

use App\Models\Brand;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    public function show(Brand $brands)
    {
        return view('brands.show', compact('brand'));
    }
}
