<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choose;
use Illuminate\Http\Request;

class ChoosesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Choices";
        $choices = Choose::all();

        return view('admin.pages.choices.index', [
            'title' => $title,
            'choices' => $choices
        ]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = "TTL - Create Choice";

        return view('admin.pages.choices.create', [
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
            'choose_title' => 'required',
            'choose_description' => 'required'
        ]);

        Choose::create([
            'choose_title' => $request->choose_title,
            'choose_description' => $request->choose_description
        ]);

        notify()->success('Choice Created.', 'Created!');

        return redirect()->route('choices.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $title = "TTL - Edit Choice";
        $choice = Choose::find($id);

        return view('admin.pages.choices.edit', [
            'title' => $title,
            'choice' => $choice
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
            'choose_title' => 'required',
            'choose_description' => 'required'
        ]);

        Choose::find($id)->update([
            'choose_title' => $request->choose_title,
            'choose_description' => $request->choose_description
        ]);

        notify()->info('Choice Updated.', 'Updated!');

        return redirect()->route('choices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $choice = Choose::find($id);

        $choice->delete();

        notify()->warning('Choice Deleted.', 'Deleted!');

        return redirect()->route('choices.index');
    }
}
