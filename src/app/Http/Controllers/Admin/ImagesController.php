<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\ImageUpload;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ImagesController extends Controller
{
    public function create()
    {
        return Inertia::render('Admin/Images/create');
    }

    public function index()
    {
        $images = ImageUpload::all();

        return Inertia::render('Admin/Images/index', ['images' => $images]);
    }

    public function store()
    {
        $path = public_path('/Admin/Images');
        $thumb = public_path('/Admin/Thumbails');

        if (! is_dir($path)) {

            if (! is_dir('/Admin')){

                mkdir(public_path('/Admin', 0777), true);
            }
            mkdir($path, 0777, true);
        }

        if (! is_dir($thumb)) {
            mkdir(public_path('/Admin/Thumbails'), 0777, true);
        }

        $images = Collection::wrap(request()->file('file'));

        $images->each(function($image) {

            $baseName = Str::random(10);

            Admin::first()->createImage($image, $baseName);

        });

        return redirect()->route('admin.home');
    }
}
