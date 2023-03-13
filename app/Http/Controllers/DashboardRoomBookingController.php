<?php

namespace App\Http\Controllers;

use App\Models\RoomBooking;
use App\Models\Room;

use App\Http\Controllers\Controller;
use App\Models\About;
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
            'room_bookings' => RoomBooking::all(),
            'room' => Room::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'status' => 'in:pending,checked_in,checked_out,cancelled',
            'payment' => 'boolean'
        ];

        $room_booking = RoomBooking::findOrFail($id);
        $room_type = RoomType::findOrFail($room_booking->room_type_id);

        // Room Status Chekedin == Not available(0)
        if ($request['status'] == "checked_in") {
            // return true;
            $status = [];
            $status['available'] = 0;

            Room::where('id', $room_type->id)->update($status);
        }

        // Room Status Chekedout || Cancelled == available(1)
        if (
            $request['status'] == "checked_out" ||
            $request['status'] == "cancelled" ||
            $request['status'] == "pending"
        ) {
            $status = [];
            $status['available'] = 1;

            Room::where('id', $room_type->id)->update($status);
        }

        // Select Room Number
        if ($request->room_id) {
            $room_id = [];
            $room_id['room_id'] = $request->room_id;

            RoomBooking::where('id', $room_booking->id)->update($room_id);
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

    public function destroy($id)
    {
        $room_booking = RoomBooking::find($id);
        RoomBooking::destroy($room_booking->id);
        return redirect('/dashboard/room_booking/')->with('success', 'Booking berhasil dihapus!');
    }
}
