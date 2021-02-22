<?php

namespace App\Models\Admin;

use App\ImagesInterface\ImagesInterface;
use App\Models\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Admin extends Authenticatable implements ImagesInterface
{
    use HasFactory,Notifiable;

    protected $guarded = [];

    public function images(): MorphMany
    {
        return $this->morphMany(ImageUpload::class, 'imageable');
    }

    public function initDirectory()
    {
        //
    }

    public function createImage(UploadedFile $image, $basename)
    {
            $original = $basename . '.' . $image->getClientOriginalExtension();

            $thumbmail = $basename . '_thumb.' . $image->getClientOriginalExtension();

            $img = Image::make($image)->fit(250,250, function ($constraint) {

                $constraint->aspectRatio();

            });

            $img->stream();

            Storage::disk('uploads')->put('/Admin/Thumbails'. '/' .$thumbmail, $img);

            $image->storeAs('/Admin/Images', $original, 'uploads');

            // store data into database
            $this->images()->create([
                'original' => '/uploads/Admin/Images/'. $original,
                'thumbail' => '/uploads/Admin/Thumbails/'. $thumbmail
            ]);
    }

    public function deleteImage(ImageUpload $image)
    {

    }
}
