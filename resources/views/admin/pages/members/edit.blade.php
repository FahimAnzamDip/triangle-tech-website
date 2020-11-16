@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('members.index') }}">Members</a></div>
                <div class="breadcrumb-item">Edit Member</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Member</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Member Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_name" required value="{{ $member->member_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Member Designation<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_designation" required value="{{ $member->member_designation }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Member Image</label>
                                    <img width="64" src="{{ asset('storage/member_images') . '/' . $member->member_image}}" alt="service image" class="mb-3 mt-1">
                                    <input type="file" class="form-control" name="member_image">
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Member Email<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_email" required value="{{ $member->member_email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Facebook Link<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_facebook" required value="{{ $member->member_facebook }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Linkedin Link<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_linkedin" required value="{{ $member->member_linkedin }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Update Member</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
