<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'User_id',
        'travel_id',
        'coli_id',
        'content',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'User_id' => 'integer',
    ];


    public function coli()
    {
        return $this->belongsTo(\App\Coli::class);
    }

    public function travel()
    {
        return $this->belongsTo(\App\Travel::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
