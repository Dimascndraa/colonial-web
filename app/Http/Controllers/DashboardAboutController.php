<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\SocialMedia;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $socialMedia = SocialMedia::all()->first();
        // return $socialMedia;
        return view('admin.about.about', [
            'about' => $about,
            'socialMedia' => $socialMedia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $rules = [
            'name' => 'max:255',
            'alias' => 'max:255',
            'short_descript' => '',
            'motto' => 'max:255',
            'logo_primary' => 'image|file|max:5120',
            'logo_secondaary' => 'image|file|max:5120',
            'icon' => 'image|file|max:5120',
            'about_img' => 'image|file|max:5120',
            'address' => 'max:255',
            'google_maps' => '',
            'email' => 'max:255',
            'telp' => 'max:255',
        ];

        $validatedData = $request->validate($rules);

        // if ($request->file('logo_primary')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['logo_primary'] = $request->file('logo_primary')->store('logo');
        // }

        if ($request->file('logo_primary')) {
            if ($request->file('logo_primary')) {
                Storage::delete($request->oldImage);
                $validatedData['logo_primary'] = $request->file('logo_primary')->store('logo');
            } else {
                $validatedData['logo_primary'] = $request->file('logo_primary')->store('logo');
            }
        }

        if ($request->file('logo_secondary')) {
            if ($request->file('logo_secondary')) {
                Storage::delete($request->oldImage);
                $validatedData['logo_secondary'] = $request->file('logo_secondary')->store('logo');
            } else {
                $validatedData['logo_secondary'] = $request->file('logo_secondary')->store('logo');
            }
        }

        if ($request->file('icon')) {
            if ($request->file('icon')) {
                Storage::delete($request->oldImage);
                $validatedData['icon'] = $request->file('icon')->store('logo/icon');
            } else {
                $validatedData['icon'] = $request->file('icon')->store('logo/icon');
            }
        }

        if ($request->file('header_img')) {
            if ($request->file('header_img')) {
                Storage::delete($request->oldImage);
                $validatedData['header_img'] = $request->file('header_img')->store('header-img');
            } else {
                $validatedData['header_img'] = $request->file('header_img')->store('header-img');
            }
        }

        if ($request->file('about_img')) {
            if ($request->file('about_img')) {
                Storage::delete($request->oldImage);
                $validatedData['about_img'] = $request->file('about_img')->store('about-img');
            } else {
                $validatedData['about_img'] = $request->file('about_img')->store('about-img');
            }
        }

        // return $validatedData;

        About::where('id', $about->id)->update($validatedData);
        return redirect('/dashboard/about/1/edit')->with('success', 'Identitas Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
