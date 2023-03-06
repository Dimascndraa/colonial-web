<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Model\Facility;
use App\Model\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardRoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $room_types = RoomType::with('facilities:name')->get();

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
            'title' => 'Tipe Kamar',
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
        // return $request->has('facility');

        $validatedData = $request->validate([
            'name' => 'required|max:50|unique:room_types,name',
            'cost_per_day' => 'required|numeric|min:0',
            'size' => 'numeric|min:0',
            'discount_percentage' => 'integer|between:0,100',
            'max_adult' => 'integer|min:1',
            'max_child' => 'numeric',
            'descript' => 'max:800',
            'facility' => 'array',
            'room_service' => 'boolean',
            'status' => 'required|boolean'
        ]);

        if ($request->has('facility')) {
            $room_type = new RoomType();
            $room_type->room_type_id = $this;
            $room_type->facilities()->attach(array_keys($request->input('facility')));
        }

        RoomType::create($validatedData);
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
    public function edit(RoomType $roomType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomType)
    {
        //
    }
}
