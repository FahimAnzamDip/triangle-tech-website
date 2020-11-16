@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Team Members</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item ">Members</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('members.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create Member</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center mb-0" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Email</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $key => $member)
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <img width="32" src="{{ asset('storage/member_images') . '/' . $member->member_image }}" alt="member image">
                                        </div>
                                    </td>
                                    <td>{{ $member->member_name }}</td>
                                    <td>{{ $member->member_designation }}</td>
                                    <td>{{ $member->member_email }}</td>
                                    <td>{{ Str::words($member->member_facebook, 6, '...') }}</td>
                                    <td>{{ Str::words($member->member_linkedin, 6, '...') }}</td>
                                    <td>
                                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary mb-1"><i class="fas fa-edit"></i></a>

                                        <a href="{{ route('members.delete', $member->id) }}" id="delete" class="btn btn-danger mb-1"><i class="fas fa-trash"></i></a>
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
