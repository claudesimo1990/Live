<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $owner;
    public $user;
    public $url;
    public $kilos;
    public $booking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $owner, $url, $kilos, $booking)
    {
        $this->user = $user;
        $this->owner = $owner;
        $this->url = $url;
        $this->kilos = $kilos;
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.booking');
    }
}
