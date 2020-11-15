@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Service</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></div>
                <div class="breadcrumb-item">Edit Services</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Service</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="service_name">Service Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="service_name" required value="{{ $service->service_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Service Icon</label>
                                    <img width="64" src="{{ asset('storage/service_images') . '/' . $service->service_image}}" alt="service image" class="mb-3 mt-1">
                                    <input type="file" class="form-control" name="service_image">
                                </div>

                                <div class="form-group">
                                    <label for="service_description">Service Description<span class="text-danger">*</span></label>
                                    <textarea style="height: 180px" name="service_description" class="form-control" required>{{ $service->service_description }}</textarea>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Update Service</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
