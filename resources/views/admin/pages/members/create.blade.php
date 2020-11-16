@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('members.index') }}">Members</a></div>
                <div class="breadcrumb-item">Create Member</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Member</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Member Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Member Designation<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_designation" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Member Image<span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" required name="member_image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Member Email<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Facebook Link<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_facebook" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Linkedin Link<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="member_linkedin" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Create Member</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
