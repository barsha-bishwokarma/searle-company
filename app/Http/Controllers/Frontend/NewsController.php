<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::whereNotNull('published_at')
            ->where('published_at', '<=', now()->endOfDay())
            ->latest('published_at')
            ->get();
        return view('frontend.news.index', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('frontend.news.show', compact('news'));
    }
}
