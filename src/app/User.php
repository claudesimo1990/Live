<?php

namespace App;

use Carbon\Carbon;
use App\Notifications\VerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'google_id',
        'facebbook_id',
        'avatar',
        'avatar_original',
        'password',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email_verified_at' => 'datetime'
    ];

    protected $appends = ['createdAt'];

    /**
     * profile
     *
     * @return void
     */
    public function profile()
    {
        return $this->hasOne(\App\Profile::class);
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation','user_id');
    }

    /**
     * colis
     *
     * @return void
     */
    public function colis()
    {
        return $this->hasMany(\App\Coli::class);
    }

    /**
     * travels
     *
     * @return void
     */
    public function travels()
    {
        return $this->hasMany(\App\Travel::class);
    }

    /**
     * comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }

    /**
     * getAvatarAttribute
     *
     * @return void
     */
    public function getAvatarPathAttribute()
    {
        return Storage::disk('public');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /**
     * The channels the user receives notification broadcasts on.
     *
     * @return string
     */
    public function receivesBroadcastNotificationsOn()
    {
        return 'messages.'.$this->id;
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d.m.Y');
    }
}
