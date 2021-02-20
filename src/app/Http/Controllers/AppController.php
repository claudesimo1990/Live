<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Pages\ImageText;
use App\Models\Pages\Step;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        $header = ImageText::where('section', 'header')->latest()->first();
        $about = ImageText::where('section', 'about')->latest()->first();
        $news = Post::latest()->limit(3)->get();
        $steps = Step::limit(3)->get();
        $destinations = Destination::all();
        $testimonials = Testimonial::limit(4)->get();

        return view('app.accueil', [
            'header' => $header,
            'about' => $about,
            'news' => $news,
            'steps' => $steps,
            'destinations' => $destinations,
            'testimonials' => $testimonials
        ]);
    }

    public function index(){

        $latest_news = Post::where('publish',1)->with('user')->latest()->limit(3)->get();
        $users = User::where('is_admin',0)->latest()->limit(3)->get();

        return view('App.accueil',compact('latest_news','users'));
    }

    public function howItWork(){

        return view('pages.howItWork');
    }
}
