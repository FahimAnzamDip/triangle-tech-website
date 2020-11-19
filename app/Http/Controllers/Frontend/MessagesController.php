<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Notifications\ContactMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class MessagesController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Contact Messages";
        $messages = Message::latest()->get();

        return view('admin.pages.messages.index', [
            'title'    => $title,
            'messages' => $messages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name'    => 'required|max:190',
            'email'   => 'required|max:190|email',
            'subject' => 'nullable|max:190',
            'message' => 'required'
        ]);

        $message = Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        $users = User::all();
        Notification::send($users, new ContactMessageNotification());

        notify()->success('Thank you. We will reach you soon.', 'Message Sent!');

        return redirect()->route('contact.page');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $title = "TTL - Contact Message Details";
        $message = Message::findOrFail($id);

        $message->update([
            'read' => 1
        ]);

        return view('admin.pages.messages.show', [
            'title' => $title,
            'message' => $message
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $message = Message::findOrFail($id);
        $message->delete();

        notify()->warning('Contact Message Deleted.', 'Deleted!');

        return  redirect()->route('messages.index');
    }
}
