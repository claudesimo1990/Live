<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Events\Newcomment;
use App\Http\Requests\CommentStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\ReviewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $comments = Comment::all();

        return view('comment.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        return view('comment.create', compact('profile'));
    }

    /**
     * @param \App\Http\Requests\CommentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentStoreRequest $request)
    {
        $comment = Comment::create($request->all());

        Mail::to($comment->author)->send(new ReviewNotification($comment));

        SyncMedia::dispatch($comment);

        event(new Newcomment($comment));

        $request->session()->flash('comment.name', $comment->name);

        return redirect()->route('comment.index');
    }
}
