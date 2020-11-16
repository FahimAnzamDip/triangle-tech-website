@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Client</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clients</a></div>
                <div class="breadcrumb-item">Edit Client</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Client</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Client Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="client_name" required value="{{ $client->client_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Client Image</label>
                                        <img width="64" src="{{ asset('storage/client_images') . '/' . $client->client_image}}" alt="client image" class="mb-3 mt-1">
                                        <input type="file" class="form-control" name="client_image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Client Link<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="client_link" required
                                    value="{{ $client->client_link }}">
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Update Client</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
