<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardRoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.room_type.index', [
            'title' => 'Tipe Kamar',
            'about' => About::all()->first(),
            'room_types' => RoomType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room_type.create', [
            'title' => 'Tambah Tipe Kamar',
            'about' => About::all()->first(),
            'facilities' => Facility::all()
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

        $rules = [
            'name' => 'required|max:50|unique:room_types,name',
            'cost_per_day' => 'required|numeric|min:0',
            'size' => 'numeric|min:0',
            'discount_percentage' => 'max:255',
            'max_adult' => 'integer|min:1',
            'max_child' => 'numeric',
            'descript' => 'max:800',
            'facility' => 'array',
            'room_service' => 'boolean',
            'status' => 'required|boolean'
        ];

        if (!$request->discount_percentage) {
            $diskon = 0;
        } else {
            $diskon = $request->input('discount_percentage');
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $room_type = new RoomType();
        $room_type->name = $request->input('name');
        $room_type->cost_per_day = $request->input('cost_per_day');
        $room_type->size = $request->input('size');
        $room_type->discount_percentage = $diskon;
        $room_type->max_adult = $request->input('max_adult');
        $room_type->max_child = $request->input('max_child');
        $room_type->descript = $request->input('descript');
        $room_type->room_service = $request->input('room_service');
        $room_type->status = $request->input('status');
        $room_type->save();

        if ($request->has('facility')) {
            $room_type->facilities()->attach(array_keys($request->input('facility')));
        }

        return redirect('/dashboard/room_types')->with('success', 'Tipe Kamar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $room_type)
    {
        $facilities = Facility::all()->where('status', true);
        return view('admin.room_type.edit')->with([
            'title' => 'Ubah Tipe Kamar',
            'about' => About::all()->first(),
            'room_type' => $room_type,
            'facilities' => $facilities
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $room_type)
    {
        $rules = [
            'name' => 'required|max:50|unique:room_types,name,' . $room_type->id,
            'cost_per_day' => 'required|numeric|min:0',
            'size' => 'numeric|min:0',
            'discount_percentage' => 'integer|between:0,100',
            'max_adult' => 'numeric',
            'max_child' => 'numeric',
            'descript' => 'max:800',
            'facility' => 'array',
            'room_service' => 'boolean',
            'status' => 'required|boolean'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $room_type->name = $request->input('name');
        $room_type->cost_per_day = $request->input('cost_per_day');
        $room_type->size = $request->input('size');
        $room_type->discount_percentage = $request->input('discount_percentage');
        $room_type->max_adult = $request->input('max_adult');
        $room_type->max_child = $request->input('max_child');
        $room_type->descript = $request->input('descript');
        $room_type->room_service = $request->input('room_service');
        $room_type->status = $request->input('status');
        $room_type->save();

        $room_type->facilities()->sync(array_keys($request->input('facility')));

        return redirect('/dashboard/room_types')->with('success', 'Tipe Kamar berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $room_type)
    {
        // // Delete rooms
        // foreach ($room_type->room as $room) {
        //     // Delete room bookings
        //     foreach ($room->room_bookings as $booking) {
        //         $booking->delete();
        //     }
        //     $room->delete();
        // }

        // // Delete images
        // foreach ($room_type->images as $image) {
        //     if ($image->delete()) {
        //         if (Storage::disk('room_type')->exists($image->name)) {
        //             Storage::delete('public/room_types/' . $image->name);
        //         }
        //     }
        // }
        // TO_DO_DEM Clear all Facilities by Eloquent remove pivot records

        RoomType::destroy($room_type->id);
        return redirect('/dashboard/room_types')->with('success', 'Tipe Kamar berhasil dihapus!');
    }
}
