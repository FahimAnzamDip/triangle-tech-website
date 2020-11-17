@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Packages</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item ">Packages</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mb-4">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('packages.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create Package</a>
                </div>
            </div>

            <div class="row">
                @forelse($packages as $package)
                <div class="col-md-4 col-lg-4">
                    <div class="pricing pricing-highlight">
                        <div class="pricing-title">
                            <strong>{{ $package->package_title }}</strong>
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div style="font-size: 1.8rem;"><sup>BDT</sup> {{ $package->package_price }}</div>
                                <div>{{ $package->package_sub_title }}</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Free Domain:</strong> {{ $package->package_domains }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Hosting:</strong> {{ $package->package_hosting }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Email:</strong> {{ $package->package_emails }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Design:</strong> {{ $package->package_design }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Pages:</strong> {{ $package->package_pages }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Slider:</strong> {{ $package->package_slider }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>SEO:</strong> {{ $package->package_seo }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Development Time:</strong> {{ $package->package_time }}</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><strong>Renewal Fees (Yearly):</strong> {{ $package->package_fees }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex pb-3 justify-content-center">
                            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary mr-2"><i class="fas fa-edit"></i> Edit</a>
                            <a href="{{ route('packages.delete', $package->id) }}" id="delete" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center"><strong>No Packages Available.</strong></div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
