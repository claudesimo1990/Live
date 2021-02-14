<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\Events\NewMessage;
use App\Notifications\newNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->contact_id,
            'text' => $request->text
        ]);

        // notify
        $to = User::find($request->contact_id);

        broadcast(new NewMessage($message))->toOthers();

        $to->notify(new newNotify(auth()->user()->unreadNotifications->last()));

        return response()->json($message);
    }

    public function getChat()
    {
        // get all users except the authenticated one
        $contacts = User::where('id', '!=', auth()->id())->where('is_admin',0)->get();

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        // add an unread key to each contact with the count of unread messages
        $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });

        return view('user.chat', [
            'contacts' => $contacts
        ]);
    }

    public function contacts()
    {
        // get all users except the authenticated one
        $contacts = User::where('id', '!=', auth()->id())->where('is_admin',0)->get();

        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        // add an unread key to each contact with the count of unread messages
        $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });

        return response()->json($contacts, 200);
    }

    public function notifications()
    {
        $notifications = Auth()->user()->unreadNotifications()->get();

        return view('user.notifications', compact('notifications'));
    }

    public function DeleteNotification()
    {
        $notifications = Auth()->user()->unreadNotifications()->get();
    }
}
