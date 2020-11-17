@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Package</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('packages.index') }}">Projects</a></div>
                <div class="breadcrumb-item">Create Package</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('admin.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Package</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('packages.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Title<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="package_title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sub Title<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_sub_title">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Price<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" required name="package_price">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Domains<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="package_domains" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hosting<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_hosting">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Emails<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_emails">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Design<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="package_design" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pages<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_pages">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Slider<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_slider">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>SEO<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="package_seo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Development Time<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_time">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Renewal Fees<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required name="package_fees">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Create Package</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
