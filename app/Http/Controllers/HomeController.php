<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Announcement;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // return Auth::user()->email;
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();
        $announcement = Announcement::all()->first();
        return view('home', [
            'title' => "$about->name",
            'about' => $about,
            'socialMedia' => $socialMedia,
            'announcement' => $announcement,
            'galleries' => Gallery::all(),
            'reviews' => Review::all(),
        ]);
    }
}
