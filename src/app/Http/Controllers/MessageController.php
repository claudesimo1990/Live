<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
   public function fetchMessages($user_id)
   {
       $my_id = Auth::id();

       $messages = Message::where(function($query) use ($user_id, $my_id) {

        $query->where('from',$my_id)->where('to', $user_id);

       })->orWhere(function($query) use ($user_id, $my_id) {

        $query->where('from',$user_id)->where('to', $my_id);

       })->get();


   }

   public function fetchPostMessages($user_id,$post_id)
   {
       $my_id = Auth::id();

       $messages = Message::where(function($query) use ($user_id, $my_id) {

        $query->where('from',$my_id)->where('to', $user_id);

       })->orWhere(function($query) use ($user_id, $my_id) {

        $query->where('from',$user_id)->where('to', $my_id);

       })->where(function($query) use ($post_id) {

        $query->where('post_id',$post_id);

       })->get();


   }

   public function storeMessage(Request $request)
   {
       dd($request);
   }
}
