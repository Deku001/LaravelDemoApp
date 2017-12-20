<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use Session;

class MessagesController extends Controller
{

    public function index($id = null)
    {

        $messages = Message::orderBy('created_at', 'DESC')->get();
        return view("messages.index",compact('messages'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        $input = $request->all();
        Message::create($input);
        Session::flash('success message', 'Message successfully Posted!');
        return redirect()->back();

    }
}
