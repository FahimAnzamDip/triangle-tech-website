@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $message->name }}'s Message</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item "><a href="{{ route('messages.index') }}">Messages</a></div>
                <div class="breadcrumb-item ">Details</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Received at</th>
                            </tr>
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->created_at->format('h:i a \/ jS F Y ') }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>Subject</th>
                            </tr>
                            <tr>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                            </tr>
                            <tr>
                                <th colspan="2">Message</th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ $message->message }}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="float-right btn btn-primary" href="{{ route('messages.index') }}"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
