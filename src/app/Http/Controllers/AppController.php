<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Pages\ImageText;
use App\Models\Pages\Page;
use App\Models\Pages\Step;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        $header = ImageText::where('section', 'header')->latest()->first();
        $about = ImageText::where('section', 'about')->latest()->first();
        $posts = Post::with('user')->latest()->limit(3)->get();
        $steps = Step::limit(3)->get();
        $destinations = Destination::all();
        $testimonials = Testimonial::with('user')->limit(3)->get();

        return view('App.welcome', [
            'header' => $header,
            'about' => $about,
            'posts' => $posts,
            'steps' => $steps,
            'destinations' => $destinations,
            'testimonials' => $testimonials
        ]);
    }

    public function about(){

        $page = Page::where('page', 'about')->latest()->first();

        return view('pages.about',compact('page'));
    }

    public function agb(){

        $page = Page::where('page', 'agb')->latest()->first();

        return view('pages.about',compact('page'));
    }

    public function privacy(){

        $page = Page::where('page', 'privacy')->latest()->first();

        return view('pages.privacy',compact('page'));
    }

    public function impressum(){

        $page = Page::where('page', 'impressum')->latest()->first();

        return view('pages.impressum',compact('page'));
    }

    public function termsOfservice(){

        $page = Page::where('page', 'termsOfservice')->latest()->first();

        return view('pages.termsOfservice',compact('page'));
    }

    public function principes(){

        $page = Page::where('page', 'principes')->latest()->first();

        return view('pages.principes',compact('page'));
    }

    /**
     * cette page est une page particuliere
     * car elle est generer directement par l utilisateur(Admin)
     * @return Application|Factory|View
     */
    public function howItWork(){

        $steps = Step::all();

        return view('pages.howItWork', compact('steps'));
    }

    /**
     * cette page est une page particuliere
     * car elle est generer directement par l utilisateur(Admin)
     * @return Application|Factory|View
     */
    public function faq(){
        //viendra de la base de donnees
        return view('pages.faq');
    }
}
