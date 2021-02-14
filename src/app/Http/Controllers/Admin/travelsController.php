<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Post::where('categorie_id',2)->orderBy('publish', 'desc')->paginate(6);
        return view('admin.travels.index',['travels' => $travels]);
    }

    public function acceptPost($id)
    {
        $post = Post::find($id);

        if($post->publish != 1) {

            $post->update(['publish' => 1]);

            //notify user  that post was validate

            return back()->with('message','le voyage á ete publié');

        }

        return back()->with('message','deja publier');
    }

    public function rejectPost($id)
    {
        $post = Post::find($id)->update(['publish' => 0]);

        return back()->with('error','Le vovages á ete retiré de la liste !');
    }
}
