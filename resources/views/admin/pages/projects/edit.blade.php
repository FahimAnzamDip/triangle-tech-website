@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Project</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></div>
                <div class="breadcrumb-item">Edit Project</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Project</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Project Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="project_name" required value="{{ $project->project_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Project Image<span class="text-danger">*</span></label>
                                    <img width="400" src="{{ asset('storage/project_images') . '/' . $project->project_image}}" alt="service image" class="mb-3 mt-1">
                                    <input type="file" class="form-control" name="project_image">
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Category<span class="text-danger">*</span></label>
                                            <select class="form-control" name="category_id" required>
                                                @foreach(\App\Models\Category::all() as $category)
                                                    <option {{ $project->category->id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Link<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="project_link" required value="{{ $project->project_link }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Project Description<span class="text-danger">*</span></label>
                                    <textarea style="height: 180px" name="project_description" class="form-control" required>{{ $project->project_description }}</textarea>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Update Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
