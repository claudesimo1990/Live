<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class packBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $owner;
    public $user;
    public $post;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $owner, $post, $url)
    {
        $this->user = $user;
        $this->owner = $owner;
        $this->post = $post;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.packBooking');
    }
}
