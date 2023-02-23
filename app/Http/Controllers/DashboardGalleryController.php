<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index', [
            'title' => "Gallery",
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create', [
            "title" => "Tambah Gallery"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'image' => 'image|file|max:5120',
            'caption' => 'required',
        ]);

        $validatedData['image'] = $request->file('image')->store('gallery');

        Gallery::create($validatedData);
        return redirect('/dashboard/gallery')->with('success', 'Gallery telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', [
            'title' => 'Ubah Gallery',
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'image' => 'image|file|max:5120',
            'caption' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->file('image')) {
                Storage::delete($request->oldImage);
                $validatedData['image'] = $request->file('image')->store('gallery');
            } else {
                $validatedData['image'] = $request->file('image')->store('gallery');
            }
        }

        Gallery::where('id', $gallery->id)->update($validatedData);
        return redirect('/dashboard/gallery')->with('success', 'Gallery Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::destroy($gallery->id);
        return redirect('/dashboard/gallery')->with('success', 'Gallery berhasil dihapus!');
    }
}
