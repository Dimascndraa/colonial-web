<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();
        return view('home', [
            'title' => "$about->name",
            'about' => $about,
            'socialMedia' => $socialMedia,
            'galleries' => Gallery::all(),
        ]);
    }
}
