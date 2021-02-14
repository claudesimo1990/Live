<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Images\Images;
use Illuminate\Contracts\Filesystem\FileExistsException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;

class ImagesController extends Controller
{
    public function create()
    {
       return view('admin.images.create');
    }

    public function index()
    {
        $imgs = Images::all();
        return view('admin.images.index', compact('imgs'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'target' => 'required'
        ]);

        $target = $request->get('target');

        if ($request->hasFile('file')) {

            $image = $request->file('file');

            $fileName = $request->get('name');

            // open an image file
            if ($request->get('target') == 'Header') {

                $img = ImageManagerStatic::make($request->file('file'))->resize(600, 400)->encode('png');

                Storage::disk('public')->put('Home/'.$fileName, $img);
            }

            Images::create([
                'name' => $fileName,
                'target' => $target,
            ]);

            flashy()->success('success');

        } else {

            flashy()->error('qualite d\'image pas acceptée');
        }

        return back();
    }

    public function destroy($images)
    {

        $img = Images::find($images);

        if(Storage::delete('/public/Home/'.$img->name)) {

            $img->delete();

        }

        return back();
    }
}
