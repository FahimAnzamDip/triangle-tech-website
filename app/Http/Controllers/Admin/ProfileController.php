<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile() {
        $title = "TTL - Admin Profile";

        return view('admin.profile.account-settings', [
            'title' => $title
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        User::find(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        notify()->info('Profile Info Updated.', 'Updated!');

        return redirect()->back();
    }
}
