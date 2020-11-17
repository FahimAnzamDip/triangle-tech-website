@extends('frontend.layouts.front-layout')

@section('page-content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area bg-gradeint4">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner mt-4">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="{{ route('home.page') }}">Home</a></li>
                                    <li><strong>Services</strong></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Service-->
    <section class="service-section why-choos-lg pad-tb wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Services We’re Provided</span>
                        <h2 class="mb20">How Can We Help You?</h2>
                        <p class="mb30"><strong>Triangle Technologies Ltd</strong> offer reasonable Service Level
                            Agreements (SLA) covering most of the additional maintenance services. With our 24/7/365
                            days per year support, we are making troubleshooting as easy as possible.</p>
                    </div>
                </div>
            </div>
            <div class="row upset link-hover shape-num justify-content-center">
                @forelse($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('storage/service_images') . '/' . $service->service_image }}" alt="service icon" class="img-fluid" />
                        </div>
                        <h4>{{ $service->service_name }}</h4>
                        <p>{{ $service->service_description }}</p>
                    </div>
                </div>
                @empty
                    <div class="alert alert-info text-center">No Services Available</div>
                @endforelse
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--Start CTA 2-->
    <section class="pad-tb fadeIn" data-wow-delay=".5s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading">
                        <span>Let's work together</span>
                        <h2 class="mb-4">Let’s make awesome things, together.</h2>
                        <a href="{{ route('contact.page') }}" class="btn-main bg-btn3">Get A Quote<i class="fas fa-chevron-right fa-icon"></i></a>
                        <p class="cta-call font-weight-bold">OR Call Us Now <a href="tel:{{ \App\Models\Contact::first()->phone_one }}" style="letter-spacing: 2px;"><i class="fas fa-phone-alt"></i> {{ \App\Models\Contact::first()->phone_one }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End CTA 2-->
    <!--Clients-->
    @include('frontend.page-sections.clients')
    <!--CTA-->
    @include('frontend.page-sections.cta')
@endsection
