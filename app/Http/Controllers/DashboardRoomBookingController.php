<?php

namespace App\Http\Controllers;

use App\Models\RoomBooking;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Room;
use App\Models\RoomType;
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

        $room_booking = RoomBooking::findOrFail($id);
        $room_type = RoomType::findOrFail($room_booking->room_id);
        $rules = [
            'status' => 'in:pending,checked_in,checked_out,cancelled',
            'payment' => 'boolean'
        ];

        // Room Status Chekedin == Not Availabel(0)
        if ($request['status'] == "checked_in") {
            // return true;
            $status = [];
            $status['availabel'] = 0;

            Room::where('id', $room_type)->update($status);
        }


        // Room Status Chekedout || Cancelled == Availabel(1)
        if (
            $request['status'] == "checked_out" ||
            $request['status'] == "cancelled"
        ) {
            $status = [];
            $status['availabel'] = 1;

            Room::where('id', $room_type)->update($status);
        }

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

    public function destroy(RoomBooking $room_booking)
    {
        return $room_booking;
        RoomBooking::destroy($room_booking->id);
        return redirect('/dashboard/room_booking/')->with('success', 'Booking berhasil dihapus!');
    }
}
