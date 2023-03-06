<?php

namespace App\Http\Controllers;


use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\RoomType;
use Illuminate\Support\Facades\Validator;

class DashboardRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $room_type = RoomType::find($id);
        return view('admin.room.index', [
            'title' => 'Ruangan',
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
        return view('admin.room.create', [
            'title' => 'Tambah Ruangan',
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
        $rules = [
            'room_number' => 'required|numeric|max:99999|unique:rooms,room_number',
            'description' => 'max:200',
            'status' => 'boolean|required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all)
                ->withErrors($validator);
        } else {
            $room_type = RoomType::find($id);
            $room = new Room();
            $room->room_number = $request->input('room_number');
            $room->description = $request->input('description');
            $room->status = $request->input('status');

            $room->room_type()->associate($room_type);
            $room->save();

            return redirect('/dashboard/room_types/' . $id . '/room')->with('success', 'Ruangan berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $room_id)
    {
        $room_type = RoomType::find($id);
        $room = Room::find($room_id);
        return view('admin.room.edit', [
            'title' => 'Tambah Ruangan',
            'about' => About::all()->first(),
            'room_type' => $room_type,
            'room' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update($id, $room_id, Request $request)
    {
        $rules = [
            'room_number' => 'required|numeric|max:99999|unique:rooms,room_number,' . $room_id,
            'description' => 'max:200',
            'status' => 'boolean|required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all)
                ->withErrors($validator);
        } else {
            $room = Room::find($room_id);
            $room->room_number = $request->input('room_number');
            $room->description = $request->input('description');
            if ($request->has('available')) {
                $room->available = $request->input('available');
            }
            $room->status = $request->input('status');
            $room->save();

            return redirect('/dashboard/room_types/' . $id . '/room')->with('success', 'Ruangan berhasil diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $room_id)
    {
        $room = Room::findOrFail($room_id);

        // Delete room bookings
        foreach ($room->room_bookings as $booking) {
            $booking->delete();
        }

        if ($room->delete()) {


            // return redirect('/admin/room_type/' . $id . '/room');
            return redirect('/dashboard/room_types/' . $id . '/room')->with('success', 'Ruangan berhasil dihapus!');
        }
        return redirect()
            ->back()
            ->withErrors(array('message' => 'Sorry, the room could not be deleted.'));
    }
}
