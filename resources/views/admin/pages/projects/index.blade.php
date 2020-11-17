@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Projects</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item ">Projects</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create Projects</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center mb-0" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Link</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td>{{ $project->project_name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <img width="80" src="{{ asset('storage/project_images') . '/' . $project->project_image }}" alt="service image">
                                        </div>
                                    </td>
                                    <td>{{ Str::words($project->project_description, 6, '...') }}</td>
                                    <td>{{ Str::words($project->project_link, 6, '...') }}</td>
                                    <td>{{ $project->category->category_name }}</td>
                                    <td>
                                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary mb-1"><i class="fas fa-edit"></i></a>

                                        <a href="{{ route('projects.delete', $project->id) }}" id="delete" class="btn btn-danger mb-1"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
