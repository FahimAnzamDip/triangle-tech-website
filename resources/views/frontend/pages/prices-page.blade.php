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
                                    <li><strong>Development Prices </strong></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Development Prices</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Pricing-->
    <section class="why-choos-lg pad-tb fadeIn wow" data-wow-delay=".2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading ptag">
                        <span>Pricing</span>
                        <h2>Build Your Dream With Us</h2>
                        <p class="mb0">We know that everybody wants cost effective website that means high quality website design with minimum cost. So, our web design prices and packages based on keeping everything in mind such as: quality of website, payment schedule, type of website, client requirements and clients budget.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table best-plan mt60 bg-gradient9">
                        <div class="inner-table">
                            <span class="title">Dynamic Website</span>
                            <p class="title-sub">Starter Business</p>
                            <h2><sup>BDT</sup> 15,000</h2>
                            <p class="duration">Yearly</p>
                            <div class="details">
                                <ul>
                                    <li><strong>Free Domain:</strong> .com, .net</li>
                                    <li><strong>Hosting:</strong> 500 MB</li>
                                    <li><strong>Email:</strong> 10 Email Address</li>
                                    <li><strong>Design:</strong> 1 Sample Design</li>
                                    <li><strong>Pages:</strong> 4 Pages</li>
                                    <li><strong>Slider:</strong> One Slider</li>
                                    <li><strong>SEO:</strong>  On-Page SEO</li>
                                    <li><strong>Development Time:</strong> 10 Days</li>
                                    <li><strong>Renewal Fees(Yearly):</strong> 3000Tk</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn3 lnk">Order Now <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table best-plan mt60 bg-gradient9">
                        <div class="inner-table">
                            <span class="title">Dynamic Website</span>
                            <p class="title-sub">Starter Business</p>
                            <h2><sup>BDT</sup> 20,000</h2>
                            <p class="duration">Yearly</p>
                            <div class="details">
                                <ul>
                                    <li><strong>Free Domain:</strong> .com, .net</li>
                                    <li><strong>Hosting:</strong> 500 MB</li>
                                    <li><strong>Email:</strong> 10 Email Address</li>
                                    <li><strong>Design:</strong> 1 Sample Design</li>
                                    <li><strong>Pages:</strong> 4 Pages</li>
                                    <li><strong>Slider:</strong> One Slider</li>
                                    <li><strong>SEO:</strong>  On-Page SEO</li>
                                    <li><strong>Development Time:</strong> 10 Days</li>
                                    <li><strong>Renewal Fees(Yearly):</strong> 3000Tk</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn3 lnk">Order Now <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table best-plan mt60 bg-gradient9">
                        <div class="inner-table">
                            <span class="title">Dynamic Website</span>
                            <p class="title-sub">Starter Business</p>
                            <h2><sup>BDT</sup> 25,000</h2>
                            <p class="duration">Yearly</p>
                            <div class="details">
                                <ul>
                                    <li><strong>Free Domain:</strong> .com, .net</li>
                                    <li><strong>Hosting:</strong> 500 MB</li>
                                    <li><strong>Email:</strong> 10 Email Address</li>
                                    <li><strong>Design:</strong> 1 Sample Design</li>
                                    <li><strong>Pages:</strong> 4 Pages</li>
                                    <li><strong>Slider:</strong> One Slider</li>
                                    <li><strong>SEO:</strong>  On-Page SEO</li>
                                    <li><strong>Development Time:</strong> 10 Days</li>
                                    <li><strong>Renewal Fees(Yearly):</strong> 3000Tk</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn3 lnk">Order Now <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing-->
    <!--CTA-->
    @include('frontend.page-sections.cta')
@endsection