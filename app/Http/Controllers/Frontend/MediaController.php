<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function  media()
    {
        $medias = Media::all();
        return view('frontend.investors.media', compact('medias'));
    }
}
