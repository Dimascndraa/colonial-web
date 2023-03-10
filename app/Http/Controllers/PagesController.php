<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Facility;
use App\Models\Post;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function book($id)
    {

        $room_type = RoomType::find($id);
        $rooms = Room::all();
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        // return $room_type;

        return view('pages.book', [
            'title' => "Book Now",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about,
            'posts' => Post::all(),
            'room_type' => $room_type,
            'rooms' => $rooms
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

    public function facility()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.facility', [
            'title' => "Our Facility",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about,
            'room_types' => RoomType::all(),
            'facilities' => Facility::all()
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

    public function review()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('pages.review', [
            'title' => "Review Us",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function home()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('dashboard.index', [
            'title' => "Home",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function profile()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('dashboard.profile', [
            'title' => "Profile",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function room()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('dashboard.room', [
            'title' => "Room",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }

    public function review_user()
    {
        $about = About::all()->first();
        $socialMedia = SocialMedia::all()->first();

        return view('dashboard.review', [
            'title' => "Review",
            'socialMedia' => $socialMedia,
            'name' => "$about->name",
            'about' => $about
        ]);
    }
}
