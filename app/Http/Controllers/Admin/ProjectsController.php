<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title = "TTL - Projects";
        $projects = Project::all();

        return view('admin.pages.projects.index', [
            'title' => $title,
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $title = "TTL - Create Project";

        return view('admin.pages.projects.create', [
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
            'project_name' => 'required',
            'project_image' => 'required|image|mimes:png,jpeg,jpg',
            'project_link' => 'required',
            'project_description' => 'required',
            'category_id' => 'required'
        ]);

        $project = Project::create([
            'category_id' => $request->category_id,
            'project_name' => $request->project_name,
            'project_link' => $request->project_link,
            'project_description' => $request->project_description
        ]);

        if ($request->hasFile('project_image')) {
            $uploaded_img = $request->file('project_image');
            $img_name = Str::random() . $project->id . '.' . $uploaded_img->getClientOriginalExtension();

            $image = Image::make($uploaded_img)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($uploaded_img->getClientOriginalExtension());

            Storage::put('public/project_images/' . $img_name, $image);

            Project::find($project->id)->update([
                'project_image' => $img_name
            ]);
        }

        notify()->success('Project Created.', 'Created!');

        return redirect()->route('projects.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $title = "TTL - Edit Projects";
        $project = Project::find($id);

        return view('admin.pages.projects.edit', [
            'title' => $title,
            'project' => $project
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
            'project_name' => 'required',
            'project_image' => 'nullable|image|mimes:png,jpeg,jpg',
            'project_link' => 'required',
            'project_description' => 'required',
            'category_id' => 'required'
        ]);

        Project::find($id)->update([
            'category_id' => $request->category_id,
            'project_name' => $request->project_name,
            'project_link' => $request->project_link,
            'project_description' => $request->project_description
        ]);

        if ($request->hasFile('project_image')) {
            Storage::delete('public/project_images/' . Project::find($id)->project_image);

            $uploaded_img = $request->file('project_image');
            $img_name = Str::random() . $id . '.' . $uploaded_img->getClientOriginalExtension();

            $image = Image::make($uploaded_img)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode($uploaded_img->getClientOriginalExtension());

            Storage::put('public/project_images/' . $img_name, $image);

            Project::find($id)->update([
                'project_image' => $img_name
            ]);
        }

        notify()->info('Project Updated.', 'Updated!');

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        //
    }
}
