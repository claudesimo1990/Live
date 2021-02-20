<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class StepController extends Controller
{
    public function store()
   {
       //store
       $steps = Collection::wrap(request()->all());

       $steps->each(function($step) {

        if ($step['id'] == null) {

            Step::create([

                'title' => $step['title'],
                'text' => $step['text']

            ]);
        }

        if ($step['id'] !== null) {

            Step::find($step['id'])->update([

                'title' => $step['title'],
                'text' => $step['text']

            ]);


        }

       });

       return redirect()->route('admin.home');
   }
}
