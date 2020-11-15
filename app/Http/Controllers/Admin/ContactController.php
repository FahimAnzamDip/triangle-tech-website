<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $title = "TTL - Site Contact Details";
        $contact = Contact::first();

        return view('admin.pages.contacts.index', [
            'title' => $title,
            'contact' => $contact
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'email' => 'required|email',
            'address' => 'required',
            'phone_one' => 'required',
            'phone_two' => 'required',
            'facebook_link' => 'required',
            'linkedin_link' => 'required',
            'github_link' => 'required'
        ]);

        Contact::findOrFail($id)->update([
            'email' => $request->email,
            'address' => $request->address,
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'facebook_link' => $request->facebook_link,
            'linkedin_link' => $request->linkedin_link,
            'github_link' => $request->github_link
        ]);

        notify()->info('Contact Details Updated.', 'Updated!');

        return redirect()->route('contact.details');
    }
}
