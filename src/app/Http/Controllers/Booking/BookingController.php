<?php

namespace App\Http\Controllers\Booking;

use App\Events\NotifUserAfterBooking;
use App\Http\Controllers\Controller;
use App\Mail\BookingMail;
use App\Mail\bookingValidate;
use App\Mail\packBooking;
use App\Models\Post\Reservation;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        // save into database
        $booking = Reservation::create([
            //'user_id' => auth()->id(),
            'user_id' => 1,
            //'post_id' => $request->get('post'),
            'post_id' => 1,
            'kilos'  =>  2,
            'reservation_date' => Carbon::now(),
            'validation_date'  => Carbon::now(),
            'object' => ''
        ]);

        event(new NotifUserAfterBooking($booking));

        dd( $booking);

    }

    public function bookingPack(Request $request)
    {
        Mail::to($request->get('owner')['email'])->send(

            new packBooking
            (
                auth()->user(),

                $request->get('owner'),

                $request->get('post')[0],

                route('confirm',[
                    'user' => auth()->id(),
                    'post' => $request->get('post')[0]['id']])
            )
        );

        if (Mail::failures()) {

            return response('error', 500);

        } else {

            return response('success', 200);
        }
    }

    public function bookingConfirm(User $user, Post $post, Request $request)
    {
        if($request->get('action') == "true") {
            $k = $request->get('k');

            if($k !== 'pack') {
                $post->kilo = ($post->kilo - $k) > 0 ? $post->kilo - $k : 0;
                $post->save();
            }

            if (!is_null($k)) {
                if($k !== 'pack') {
                    $post->kilo =- $request->get('k');
                }
                // Update booking
                Reservation::find($request->get('book_id'))->update([
                    'validation_date' => now(),
                    'status' => 'accepted'
                ]);
                Mail::to($user->email)->send(new bookingValidate($user, route('accueil')));
            }
            return view('booking.confirmation');
        } else {
            // Update booking
            Reservation::find($request->get('book_id'))->update([
                'validation_date' => now(),
                'status' => 'rejected'
            ]);
            return redirect(route('news.index'));
        }
    }
}
