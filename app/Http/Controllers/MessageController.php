<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at','desc')->paginate(10);
        $count_messages = Message::count();
        return view('admin.messages.index',compact('count_messages','messages'));
    }
}
