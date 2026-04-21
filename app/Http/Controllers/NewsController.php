<?php

namespace App\Http\Controllers;

use App\Models\News;
 

class NewsController extends Controller
{
    public function index()
    {
        $news = News::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->get();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
