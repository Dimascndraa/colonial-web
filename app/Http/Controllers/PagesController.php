<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function book()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.book', [
            'title' => "Book Now",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function covid()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.covid', [
            'title' => "COVID Protocols",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function dining()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.dining', [
            'title' => "Dining",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function donate()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.donate', [
            'title' => "Donate Now",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function map()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.map', [
            'title' => "Our Hotels",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function membership()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.membership', [
            'title' => "Be a Member",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function news()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.news', [
            'title' => "Latest News",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function team()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.team', [
            'title' => "Our Team",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }
}
