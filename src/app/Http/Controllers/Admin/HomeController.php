<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\User;

class HomeController extends Controller
{  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        //stats
        $travels = Post::where('categorie_id',2)->count();
        $packs = Post::where('categorie_id',1)->count();
        $users =   User::all()->count();
        
        return view('admin.home', [

            'travels_count' => $travels,
            'packs_count' => $packs,
            'users_count' => $users,

        ]);
    }
}
