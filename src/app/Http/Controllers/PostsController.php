<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $key = !empty($request->get('key')) ? $request->get('key') : 'allNews';

        return view('posts.index', compact('key'));
    }

    public function travel()
    {
        return view('posts.travel.create');
    }

    public function packet()
    {
        return view('posts.packet.create');
    }

    public function listeNews(): JsonResponse
    {
        $posts = Post::where('publish',1)->paginate(4);

        return response()->json($posts, 200);
    }
}
