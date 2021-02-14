<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class ColisController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colis = Post::where('categorie_id',1)->orderBy('publish', 'desc')->paginate(6);
        return view('admin.packs.index',['colis' => $colis]);
    }

    public function acceptPost($id)
    {
        $post = Post::find($id);

        if($post->publish != 1) {

            $post->update(['publish' => 1]);

            //notify user  that post was validate 

            return back()->with('message','Annonce publiée');

        }

        return back()->with('message','Annonce deja publiée');
    }

    public function rejectPost($id)
    {
        $post = Post::find($id)->update(['publish' => 0]);

        return back()->with('error','L Annonce a ete retiré de la liste !');
    }
}
