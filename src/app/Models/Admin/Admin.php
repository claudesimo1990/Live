<?php

namespace App\Models\Admin;

use App\ImagesInterface\ImagesInterface;
use App\Models\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
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
        $path = storage_path('/Admin/Images');
        $thumb = storage_path('/Admin/Thumbails');

        if (! is_dir($path)) {
            mkdir(storage_path('/Admin', 0777));
            mkdir($path, 0777);
        }

        if (! is_dir($thumb)) {
            mkdir(storage_path('/Admin/Thumbails'), 0777);
        }
    }

    public function createImage(UploadedFile $image, $basename)
    {
            $original = $basename . '.' . $image->getClientOriginalExtension();
            $thumbmail = $basename . '_thumb.' . $image->getClientOriginalExtension();

            Image::make($image)
                ->fit(250,250)
                ->save(storage_path('/Admin/Thumbails/') . $thumbmail, 80);

            $image->move(storage_path('/Admin/Images'), $original);

            // store data into database
            $this->images()->create([
                'original' => 'storage/Admin/Images/'. $original,
                'thumbail' => 'storage/Admin/Thumbails/'. $thumbmail
            ]);

            return response('Ok', 200);
    }

    public function deleteImage(ImageUpload $image)
    {

    }
}
