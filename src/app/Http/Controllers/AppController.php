<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\User;
use App\Events\PresentEvent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index(){

        $latest_news = Post::where('publish',1)->with('user')->latest()->limit(3)->get();
        $users = User::where('is_admin',0)->latest()->limit(3)->get();

        return view('App.accueil',compact('latest_news','users'));
    }

    public function howItWork(){

        return view('pages.howItWork');
    }
}
