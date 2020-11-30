@extends('frontend.layouts.front-layout')

@section('page-content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area bg-personal">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner mt-4">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="{{ route('home.page') }}">Home</a></li>
                                    <li><strong>Contact</strong></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Enquire Form-->
    <section class="why-choos-lg pad-tb section-nx wow fadeIn" id="contact" data-wow-delay=".2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-7">
                    <div class="common-heading text-l">
                        <span>Contact Now</span>
                        <h2 class="mt0 mb0">Have Question? Write a Message</h2>
                        <p class="mb60 mt20">We will catch you as early as we receive the message</p>
                    </div>
                    <form method="post" action="{{ route('messages.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required value="{{ old('name') }}" placeholder="Enter your name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}" placeholder="Enter your email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Enter subject">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Message<span class="text-danger">*</span></label>
                            <textarea name="message" id="" rows="6" class="form-control" required placeholder="Enter message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn-main bg-btn3 lnk"><i class="fas fa-paper-plane mr-2"></i> Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="contact-details">
                        <div class="funfct srcl4">
                            <h4 class="mb-3" style="color:#6A6A8E;"><i class="fas fa-phone-alt mr-2"></i> Phone</h4>
                            <p><a href="tel:{{ $contact->phone_one }}">{{ $contact->phone_one }}</a></p>
                            <p><a href="tel:{{ $contact->phone_two }}">{{ $contact->phone_two }}</a></p>
                        </div>
                        <div class="funfct srcl1">
                            <h4 class="mb-3" style="color:#6A6A8E;"><i class="fas fa-envelope mr-2"></i> Email</h4>
                            <p><a href="maito:{{ $contact->email }}">{{ $contact->email }}</a></p>
                        </div>
                        <div class="funfct srcl2">
                            <h4 class="mb-3" style="color:#6A6A8E;"><i class="fas fa-map-marker-alt mr-2"></i> Address</h4>
                            <p>{{ $contact->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Enquire Form-->
    <!--Google Map-->
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=Triangle%20Technologies&t=&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:400px;width:auto;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:auto;}</style></div>
    <!--Google Map-->
    <!--CTA-->
    @include('frontend.page-sections.cta')
@endsection
