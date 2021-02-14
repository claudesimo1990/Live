<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom',
        'User_id',
        'birthDay',
        'ville',
        'pays',
        'rue',
        'phone',
        'user_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'User_id' => 'integer',
        'isVerified' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birthDay',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
