<?php

namespace App\Http\Controllers;

use App\Algo\Booking;
use App\Models\RoomBooking;
use App\Models\RoomType;
use App\Rules\RoomAvailableRule;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\RoomBooked;


class RoomBookingController extends FrontController
{
    public function book(Request $request, $room_type_id)
    {
        if (!Auth::check()) {
            return Redirect::to("/login");
        }

        $arrivaldate = str_replace("/", "-", "$request->arrival_date");
        $arrival_boom = explode("-", $arrivaldate);
        $arrival_date = $arrival_boom[2] . '-' . $arrival_boom[1] . '-' . $arrival_boom[0];
        // return $arrival_date;

        $departuredate = str_replace("/", "-", "$request->departure_date");
        $departure_boom = explode("-", $departuredate);
        $departure_date = $departure_boom[2] . '-' . $departure_boom[1] . '-' . $departure_boom[0];
        // return $departure_date;

        // return auth()->user()->room_bookings->count();
        if (auth()->user()->room_bookings->count() > 0) {
            $book = RoomBooking::where('user_id', auth()->user()->id)->get('arrival_date')->last()->arrival_date === $arrival_date;
            $pending = RoomBooking::where('user_id', auth()->user()->id)->get('status')->last()->status == 'pending';
            $checked_in = RoomBooking::where('user_id', auth()->user()->id)->get('status')->last()->status == 'checked_in';

            if ($book) {
                if ($checked_in || $pending) {
                    return redirect('/pages/facility')->with('failed', 'Anda telah pesan kamar di tanggal ini!');
                }
            };
        }

        $rules = [
            'number_of_adult' => 'required|numeric|min:1',
            'number_of_child' => 'required|numeric|min:0',
            'arrival_date' => 'required|date|after_or_equal:today',
            'departure_date' => 'required|date|after_or_equal:' . $arrival_date,
        ];
        $rules['arrival_date'] = $arrival_date;
        $rules['departure_date'] = $departure_date;
        $rules['number_of_adult'] = $request->number_of_adult;
        $rules['number_of_child'] = $request->number_of_child;
        // return $rules;

        $room_type = RoomType::findOrFail($room_type_id);
        // return $room_type;

        $new_arrival_date = $arrival_date;
        // return $new_arrival_date;

        $new_departure_date = $departure_date;
        // return $new_departure_date;

        $rules['booking_validation'] = [new RoomAvailableRule($room_type, $new_arrival_date, $new_departure_date)];

        // $validator = Validator::make($request->all(), $rules);
        // return $validator;
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withInput($request->all())
        //         ->withErrors($validator);
        // }

        $room_booking = new RoomBooking();
        $user = Auth::user();

        $room_booking->arrival_date = $arrival_date;
        $room_booking->departure_date = $departure_date;
        /**
         * Find total cost by counting number of days and multiplying it with cost of rooms.
         */
        $startTime = Carbon::parse($room_booking->arrival_date);
        $finishTime = Carbon::parse($room_booking->departure_date);
        $no_of_days = $finishTime->diffInDays($startTime) ? $finishTime->diffInDays($startTime) : 1;
        $room_booking->room_cost = $no_of_days * $room_type->finalPrice;
        $room_booking->user_id = $user->id;
        /**
         * Select random room for booking of given room type
         */

        $booking = new Booking($room_type, $new_arrival_date, $new_departure_date);
        // $room_booking->room_id = $booking->available_room_number();
        $room_booking->room_type_id = $request->room_type_id;
        $room_booking->user_id = $user->id;
        $room_booking->save();

        $this->send_email(Auth::user()->email);

        return redirect('/')->with('success', 'Anda berhasil memesan kamar!');
    }

    private function send_email($email)
    {
        if (empty($email)) {
            $email = Auth::user()->email;
        }
        Mail::to($email)->send(new RoomBooked());
    }
}
