<?php

namespace App\Listeners;

use App\Events\NotifUserAfterBooking;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendBookingNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NotifUserAfterBooking $event
     * @return void
     */
    public function handle(NotifUserAfterBooking $event)
    {
        dd($event);
    }
}
