@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Choice</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('choices.index') }}">Choices</a></div>
                <div class="breadcrumb-item">Create Choice</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Choice</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('choices.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Choice Title<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="choose_title" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Choice Description<span class="text-danger">*</span></label>
                                    <textarea style="height: 180px" name="choose_description" class="form-control" required></textarea>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Create Choice</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
