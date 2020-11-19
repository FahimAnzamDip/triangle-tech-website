@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Site Settings</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Site Settings</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Site Sttings</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Logo<span class="text-danger">*</span></label>
                                            <img width="200" src="{{ asset('storage/important') . '/' . 'ttl-logo.png'}}" alt="Site Logo" class="mb-3 mt-1">
                                            <input type="file" class="form-control" name="site_logo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Meta Image<span class="text-danger">*</span></label>
                                            <img width="178" src="{{ asset('storage/important') . '/' . 'link_image.jpg'}}" alt="Meta Image" class="mb-3 mt-1">
                                            <input type="file" class="form-control" name="meta_image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Title (Max 60 to 90 Characters - Best Practice)<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="meta_title" required value="{{ $setting->meta_title }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Meta Keywords<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_keywords" required value="{{ $setting->meta_keywords }}">
                                </div>

                                <div class="form-group">
                                    <label>Meta Description (Max 120 Characters - Best Practice)<span class="text-danger">*</span></label>
                                    <textarea style="height: 180px" name="meta_description" class="form-control" required>{{ $setting->meta_description }}</textarea>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Update Settings</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
