@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Account Settings</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Account Settings</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf

                            <div class="card-header">
                                <h4>Change Profile Info</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="phone">Name <span class="text-danger">*</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" required placeholder="Enter your name" value="{{ Auth::user()->name }}">

                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required placeholder="Enter your email" value="{{ Auth::user()->email }}">

                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-right pt-0">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <form method="POST" action="{{ route('user-password.update') }}">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4>Change Password</h4>
                            </div>
                            <div class="card-body">
                                @if(Session::has('status'))
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <div class="alert-body">
                                            <strong style="font-size: 16px;">{{ Session::get('status') == 'password-updated' ? 'Password Updated!' : '' }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="current_password">Current Password <span class="text-danger">*</span></label>
                                    <input class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" type="password" name="current_password" required placeholder="Enter your current password">

                                    @error('current_password', 'updatePassword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input class="form-control @error('password', 'updatePassword') is-invalid @enderror" type="password" name="password" required placeholder="Enter your new password">

                                    @error('password', 'updatePassword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                                    <input class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" type="password" name="password_confirmation" required placeholder="Enter your new password again">

                                    @error('password_confirmation', 'updatePassword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
