<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.posts', [
            'title' => "Latest News",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about,
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.post', [
            'title' => "Latest News",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about,
            'post' => $post
        ]);
    }
}
