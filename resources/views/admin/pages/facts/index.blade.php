@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Facts</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Facts</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="{{ route('facts.update', $fact->id) }}">
                            @csrf
                            <div class="card-header">
                                <h4>Edit Facts</h4>
                            </div>
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Icon 1 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_icon1 }}" required name="fact_icon1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Name 1 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_name1 }}" required name="fact_name1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Count 1 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_count1 }}" required name="fact_count1">
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-3">

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Icon 2 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_icon2 }}" required name="fact_icon2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Name 2 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_name2 }}" required name="fact_name2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Count 2 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_count2 }}" required name="fact_count2">
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-3">

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Icon 3 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_icon3 }}" required name="fact_icon3">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Name 3 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_name3 }}" required name="fact_name3">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Count 3 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_count3 }}" required name="fact_count3">
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-3">

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Icon 4 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_icon4 }}" required name="fact_icon4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Name 4 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_name4 }}" required name="fact_name4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fact Count 4 <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $fact->fact_count4 }}" required name="fact_count4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right pt-0">
                                <button class="btn btn-primary" type="submit">Update Facts</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
