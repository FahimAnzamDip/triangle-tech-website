<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ClientsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Clients";
        $clients = Client::latest()->get();

        return view('admin.pages.clients.index', [
            'title' => $title,
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = "TTL - Create Client";

        return view('admin.pages.clients.create', [
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
            'client_name' => 'required',
            'client_image' => 'required|image|mimes:jpeg,jpg,png',
            'client_link' => 'required'
        ]);

        $client = Client::create([
            'client_name' => $request->client_name,
            'client_link' => $request->client_link,
        ]);

        if ($request->hasFile('client_image')) {
            $uploaded_img = $request->file('client_image');
            $img_name = Str::random() . $client->id . '.' . $uploaded_img->getClientOriginalExtension();

            $image = Image::make($uploaded_img)->resize(72, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($uploaded_img->getClientOriginalExtension());

            Storage::put('public/client_images/' . $img_name, $image);

            Client::find($client->id)->update([
                'client_image' => $img_name
            ]);
        }

        notify()->success('Client Created.', 'Created!');

        return redirect()->route('clients.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $title = "TTL - Edit Title";
        $client = Client::find($id);

        return view('admin.pages.clients.edit', [
            'title' => $title,
            'client' => $client
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
            'client_name' => 'required',
            'client_image' => 'nullable|image|mimes:jpeg,jpg,png',
            'client_link' => 'required'
        ]);

        Client::find($id)->update([
            'client_name' => $request->client_name,
            'client_link' => $request->client_link,
        ]);

        if ($request->hasFile('client_image')) {
            Storage::delete('public/client_images/' . Client::find($id)->client_image);

            $uploaded_img = $request->file('client_image');
            $img_name = Str::random() . $id . '.' . $uploaded_img->getClientOriginalExtension();

            $image = Image::make($uploaded_img)->resize(72, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($uploaded_img->getClientOriginalExtension());

            Storage::put('public/client_images/' . $img_name, $image);

            Client::find($id)->update([
                'client_image' => $img_name
            ]);
        }

        notify()->info('Client Updated.', 'Updated!');

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $client = Client::findOrFail($id);

        Storage::delete('public/client_images/' . $client->client_image);
        $client->delete();

        notify()->warning('Client Deleted.', 'Deleted!');

        return redirect()->route('clients.index');
    }
}
