<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Image;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as ImageManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $room_type = RoomType::find($id);
        return view('admin.image.index', [
            'title' => 'Image',
            'about' => About::all()->first(),
            'room_type' => $room_type
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $room_type = RoomType::find($id);
        return view('admin.image.create', [
            'title' => 'Image',
            'about' => About::all()->first(),
            'room_type' => $room_type
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:5210',
            'caption' => 'max:30',
            'is_primary' => 'required',
            'status' => 'required',
            // 'room_type_id' => 'required'
        ]);
        $validatedData['image'] = $request->file('image')->store('room_type');
        $validatedData['room_type_id'] = $id;


        if ($validatedData['is_primary'] == true) {
            $this->set_is_primary_false($id);
        }

        // return $validatedData;

        Image::create($validatedData);
        return redirect('/dashboard/room_types')->with('success', 'Gambar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $image_id)
    {
        $room_type = RoomType::find($id);
        $image = Image::find($image_id);
        return view('admin.image.edit', [
            'title' => 'Image',
            'about' => About::all()->first(),
            'room_type' => $room_type,
            'image' => $image
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update($id, $image_id, Request $request, Image $image)
    {
        // return $request;
        $validatedData = $request->validate([
            'image' => 'max:5210',
            'caption' => 'max:30',
            'is_primary' => 'required',
            'status' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        $validatedData['room_type_id'] = $id;

        if ($validatedData['is_primary'] == true) {
            $this->set_is_primary_false($id);
        }

        Image::where('id', $id)->update($validatedData);
        return redirect('/dashboard/room_types')->with('success', 'Gambar berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        if ($image->image) {
            Storage::delete($image->image);
        }

        Image::destroy($image->id);
        return redirect('/dashboard/room_types')->with('success', 'Gambar berhasil dihapus!');
    }

    public function set_is_primary_false($room_type_id)
    {
        $room_type = RoomType::find($room_type_id);
        foreach ($room_type->images as $image) {
            $image->is_primary = false;
            $image->save();
        }
    }
}
