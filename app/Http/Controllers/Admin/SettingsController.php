<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() {
        $title = "TTL - Site Settings";
        $setting = Setting::first();

        return view('admin.pages.settings.index', [
            'title' => $title,
            'setting' => $setting
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'site_logo' => 'nullable|image|mimes:png',
            'meta_image' => 'nullable|images|mimes:jpeg,jpg,png',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required'
        ]);

        Setting::find($id)->update([
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        notify()->info('Site Settings Updated.', 'Updated!');

        return redirect()->route('settings.index');
    }
}
