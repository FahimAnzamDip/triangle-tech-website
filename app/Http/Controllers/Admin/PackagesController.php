<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Packages";
        $packages = Package::all();

        return view('admin.pages.packages.index', [
            'title' => $title,
            'packages' => $packages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = "TTL - Create Package";

        return view('admin.pages.packages.create', [
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
            'package_title' => 'required',
            'package_sub_title' => 'required',
            'package_price' => 'required|numeric',
            'package_domains' => 'required',
            'package_emails' => 'required',
            'package_hosting' => 'required',
            'package_design' => 'required',
            'package_pages' => 'required',
            'package_slider' => 'required',
            'package_seo' => 'required',
            'package_time' => 'required',
            'package_fees' => 'required',
        ]);

        Package::create($request->all());

        notify()->success('Package Created.', 'Created!');

        return redirect()->route('packages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $title = "TTL - Edit Package";
        $package = Package::find($id);

        return view('admin.pages.packages.edit', [
            'title' => $title,
            'package' => $package
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
            'package_title' => 'required',
            'package_sub_title' => 'required',
            'package_price' => 'required|numeric',
            'package_domains' => 'required',
            'package_emails' => 'required',
            'package_hosting' => 'required',
            'package_design' => 'required',
            'package_pages' => 'required',
            'package_slider' => 'required',
            'package_seo' => 'required',
            'package_time' => 'required',
            'package_fees' => 'required',
        ]);

        Package::find($id)->update($request->all());

        notify()->info('Package Updated.', 'Updated!');

        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        Package::find($id)->delete();

        notify()->warning('Package Deleted.', 'Deleted!');

        return redirect()->route('packages.index');
    }
}
