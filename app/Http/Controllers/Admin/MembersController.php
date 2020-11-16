<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MembersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Team Members";
        $members = Member::all();

        return view('admin.pages.members.index', [
            'title' => $title,
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = "TTL - Create Member";

        return view('admin.pages.members.create', [
            'title' => $title
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
            'member_name' => 'required',
            'member_designation' => 'required',
            'member_image' => 'required|image|mimes:png,jpeg,jpg',
            'member_email' => 'required',
            'member_facebook' => 'required',
            'member_linkedin' => 'required'
        ]);

        $member = Member::create([
            'member_name' => $request->member_name,
            'member_designation' => $request->member_designation,
            'member_email' => $request->member_email,
            'member_facebook' => $request->member_facebook,
            'member_linkedin' => $request->member_linkedin
        ]);

        if ($request->hasFile('member_image')) {
            $uploaded_img = $request->file('member_image');
            $img_name = Str::random() . $member->id . '.' . $uploaded_img->getClientOriginalExtension();

            $image = Image::make($uploaded_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($uploaded_img->getClientOriginalExtension());

            Storage::put('public/member_images/' . $img_name, $image);

            Member::find($member->id)->update([
                'member_image' => $img_name
            ]);
        }

        notify()->success('Team Member Created.', 'Created!');

        return redirect()->route('members.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $title = "TTL - Edit Member";
        $member = Member::findOrFail($id);

        return view('admin.pages.members.edit', [
            'title' => $title,
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
            'member_name' => 'required',
            'member_designation' => 'required',
            'member_image' => 'nullable|image|mimes:png,jpeg,jpg',
            'member_email' => 'required',
            'member_facebook' => 'required',
            'member_linkedin' => 'required'
        ]);

        Member::find($id)->update([
            'member_name' => $request->member_name,
            'member_designation' => $request->member_designation,
            'member_email' => $request->member_email,
            'member_facebook' => $request->member_facebook,
            'member_linkedin' => $request->member_linkedin
        ]);

        if ($request->hasFile('member_image')) {
            Storage::delete('public/member_images/' . Member::find($id)->member_image);

            $uploaded_img = $request->file('member_image');
            $img_name = Str::random() . $id . '.' . $uploaded_img->getClientOriginalExtension();

            $image = Image::make($uploaded_img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($uploaded_img->getClientOriginalExtension());

            Storage::put('public/member_images/' . $img_name, $image);

            Member::find($id)->update([
                'member_image' => $img_name
            ]);
        }

        notify()->info('Team Member Updated.', 'Updated!');

        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $member = Member::findOrFail($id);

        Storage::delete('public/member_images/' . $member->member_image);
        $member->delete();

        notify()->warning('Team Member Deleted.', 'Deleted!');

        return redirect()->route('members.index');
    }
}
