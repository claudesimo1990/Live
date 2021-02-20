<?php

namespace App\Models\Admin;

use App\ImagesInterface\ImagesInterface;
use App\Models\ImageUpload;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Intervention\Image\Facades\Image;

class Admin extends Authenticatable implements ImagesInterface
{
    use Notifiable;

    protected $guarded = [];

    public function images(): MorphMany
    {
        return $this->morphMany(ImageUpload::class, 'imageable');
    }

    public function initDirectory()
    {
        $path = public_path('/Admin/Images');
        $thumb = public_path('/Admin/Thumbails');

        if (! is_dir($path)) {
            mkdir(public_path('/Admin', 0777));
            mkdir($path, 0777);
        }

        if (! is_dir($thumb)) {
            mkdir(public_path('/Admin/Thumbails'), 0777);
        }
    }

    public function createImage(UploadedFile $image, $basename)
    {
        $original = $basename . '.' . $image->getClientOriginalExtension();
            $thumbmail = $basename . '_thumb.' . $image->getClientOriginalExtension();

            Image::make($image)
                ->fit(250,250)
                ->save(public_path('/Admin/Thumbails/') . $thumbmail, 80);

            $image->move(public_path('/Admin/Images'), $original);

            // store data into database
            $this->images()->create([
                'original' => '/Admin/Images/'. $original,
                'thumbail' => '/Admin/Thumbails/'. $thumbmail
            ]);
    }

    public function deleteImage(ImageUpload $image)
    {

    }
}
