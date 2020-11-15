@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Contact Details</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Contact Details</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="{{ route('contact.details.update', $contact->id) }}">
                            @csrf
                            <div class="card-header">
                                <h4>Edit Contact Details</h4>
                            </div>
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->email }}" required name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->address }}" required name="address">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_one">Phone Number 1 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->phone_one }}" required name="phone_one">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_line_one">Phone Number 2 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->phone_two }}" required name="phone_two">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="facebook_link">Facebook Link <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->facebook_link }}" required name="facebook_link">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="linkedin_link">Linkedin Link <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->linkedin_link }}" required name="linkedin_link">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="github_link">Github Link <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $contact->github_link }}" required name="github_link">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right pt-0">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
