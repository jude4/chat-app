<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\PersonalMessageSent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function fetchMessages()
    {
        return  Message::with('user')->get();
    }


    public function sendMessage(Request $request)
    {
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();
        return ['status' => 'Message Sent!'];
    }

    public function sendpersonalMessage(Request $request)
    {
        $sender = Auth::user();
        $reciever = $request->reciever;
        $message = $sender->chats()->create([
            'reciever_id' => $request->reciever->id,
            'message' => $request->input('message')
        ]);

        broadcast(new PersonalMessageSent($sender, $reciever, $message))->toOthers();
        return ['status' => 'Message Sent!'];
    }


    public function personalChat(Request $request)
    {
        $reciever = User::find($request->id);
        $chats = auth()->user()->chats()->with('sender')->get();
        return view('personal-chat', compact('reciever', 'chats'));
    }
}