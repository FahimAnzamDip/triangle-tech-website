<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Project Categories";
        $categories = Category::all();

        return view('admin.pages.categories.index', [
            'title' => $title,
            'categories' => $categories
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
            'category_name' => 'required'
        ]);

        Category::create([
            'category_name' => $request->category_name
        ]);

        notify()->success('Project Category Created.', 'Created!');

        return redirect()->route('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $category = Category::findOrFail($id);

        return response()->json($category, 200);
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
            'category_name' => 'required'
        ]);

        Category::findOrFail($id)->update([
            'category_name' => $request->category_name
        ]);

        notify()->info('Project Category Updated.', 'Updated!');

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        Category::find($id)->delete();

        notify()->warning('Project Category Deleted.', 'Deleted!');

        return redirect()->route('categories.index');
    }
}
