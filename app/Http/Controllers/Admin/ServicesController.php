<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServicesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Services";
        $services = Service::all();

        return view('admin.pages.services.index', [
            'title'    => $title,
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = "TTL - Create Service";

        return view('admin.pages.services.create', [
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
            'service_name' => 'required',
            'service_image' => 'required|image',
            'service_description' => 'required'
        ]);

        $service = Service::create([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description
        ]);

        if ($request->hasFile('service_image')) {
            $uploaded_img = $request->file('service_image');

            $img_name = Str::random() . $service->id . '.' . $uploaded_img->getClientOriginalExtension();

            $uploaded_img->storeAs('public/service_images/', $img_name);

            Service::find($service->id)->update([
                'service_image' => $img_name
            ]);
        }

        notify()->success('Service Created.', 'Created!');

        return redirect()->route('services.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $title = "TTL - Edit Service";
        $service = Service::findOrFail($id);

        return view('admin.pages.services.edit', [
            'title'   => $title,
            'service' => $service
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
            'service_name' => 'required',
            'service_image' => 'nullable|image',
            'service_description' => 'required'
        ]);

        Service::find($id)->update([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description
        ]);

        if ($request->hasFile('service_image')) {
            Storage::delete('public/service_images/'.Service::find($id)->service_image);

            $uploaded_img = $request->file('service_image');

            $img_name = Str::random() . $id . '.' . $uploaded_img->getClientOriginalExtension();

            $uploaded_img->storeAs('public/service_images/', $img_name);

            Service::find($id)->update([
                'service_image' => $img_name
            ]);
        }

        notify()->info('Service Updated.', 'Updated!');

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $service = Service::findOrFail($id);

        Storage::delete('public/service_images/'.$service->service_image);
        $service->delete();

        notify()->warning('Service Deleted.', 'Deleted!');

        return redirect()->route('services.index');
    }
}
