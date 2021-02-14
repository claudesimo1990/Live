<?php

namespace App\Http\Controllers;

use App\Message;
use App\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class chatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Post $post) {

        $messages = Message::where('post_id', $post->id)
                            ->where('user_id', \Auth::user()->id)
                            ->get();
                            dd($messages);

        return view('App.chat', 
        [
            'post' => $post->load('user'), 
            'messages' => $messages
        ]);
    }

    public function getMessages() {

        return Message::with('user')->get();
        
    }
    public function CreateMessage(Request $request) {

       $datas =  $request->validate([
            'content' => 'required',
            'to'     => 'required',
            'user_id' => 'required',
            'post_id' => 'required'
        ]);

       $message =  Message::create($datas);

        broadcast(new sendChatMessage($message))->toOthers();

        return \response('tout a bien fonctionner');

    }


}