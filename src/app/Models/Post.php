<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded;

    protected $appends = ['dateFrom','dateTo','Path','createdAt'];

    public function getDateFromAttribute(){

        return Carbon::parse($this->attributes['dateFrom'])->format('d.m.Y H:i');

    }
    public function getDateToAttribute(){

        return Carbon::parse($this->attributes['dateTo'])->format('d.m.Y H:i');

    }
    public function getPathAttribute () {

        return route('post.booking',['post' => $this->attributes['id'], 'user' => $this->attributes['user_id'] ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ImageUpload::class);
    }

    public function getCreatedAtAttribute () {

        return $this->updated_at->diffForHumans();

    }
}
