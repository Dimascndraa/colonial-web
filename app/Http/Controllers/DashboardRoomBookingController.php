<?php

namespace App\Http\Controllers;

use App\Models\RoomBooking;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DashboardRoomBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.room_booking.index', [
            'title' => 'Booking Ruangan',
            'about' => About::all()->first(),
            'room_bookings' => RoomBooking::all()
        ]);
    }

    public function edit($id, RoomBooking $roomBooking)
    {
        return view('admin.room_booking.edit', [
            'title' => 'Booking Ruangan',
            'about' => About::all()->first(),
            'room_booking' => $roomBooking
        ]);
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $room_booking = RoomBooking::findOrFail($id);

        $rules = [
            'status' => 'in:pending,checked_in,checked_out,cancelled',
            'payment' => 'boolean'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $room_booking->status = $request->input('status');
        $room_booking->payment = $request->input('payment');
        $room_booking->save();

        return redirect('/dashboard/room_booking/')->with('success', 'Booking berhasil diperbarui!');
    }
}
