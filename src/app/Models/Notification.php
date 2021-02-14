<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\DatabaseNotification;

class Notification extends DatabaseNotification
{
    public function user()
    {
        return $this->belongsTo(User::class, 'notifiable_id'); 
    }
}
