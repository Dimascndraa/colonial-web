<?php

namespace App\Http\Controllers;

use App\Models\EventBooking;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DashboardEventBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event_booking.index', [
            'title' => 'Event Booking',
            'about' => About::all()->first(),
            'event_bookings' => EventBooking::all()
        ]);
    }

    public function edit(EventBooking $eventBooking)
    {
        return view('admin.event_booking.edit', [
            'title' => 'Event Booking',
            'about' => About::all()->first(),
            'event_booking' => $eventBooking
        ]);
    }

    public function update(Request $request, $id)
    {
        $event_booking = EventBooking::findOrFail($id);

        $rules = [
            'status' => 'boolean',
            'payment' => 'boolean'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $event_booking->status = $request->input('status');
        $event_booking->payment = $request->input('payment');
        $event_booking->save();

        return redirect('/dashboard/room_booking/')->with('success', 'Event Booking berhasil diperbarui!');
    }
}
