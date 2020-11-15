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
                                    <li><strong>About</strong></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start About-->
    <section class="service-section why-choos-lg pad-tb wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading">
                        <span>More About Us</span>
                        <h2 class="mb20">Welcome To Triangle Technologies Ltd.</h2>
                        <p class="mb30"><strong>Triangle Technologies Ltd</strong> is a well known software company in
                            Bangladesh which is provide quality product to clients before deadline. The ambition of TTL
                            is to grow business worldwide by giving solid and reliable services</p>
                    </div>
                </div>
            </div>
            <div class="row upset link-hover shape-num justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor ovr-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/who-we-are.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Who We Are</h4>
                        <p>We are motivated group of Passionate Programmers, capable of building & deploying to
                            continuous change. We are a multidisciplinary team, innovation focused, made of highly
                            creative & dynamic, driven by the desire to build valuable and meaningful experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor ovr-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/mission.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Mission</h4>
                        <p>Triangle Technologies Ltd.’s mission is to enhance the business operation of its clients by
                            developing and/or implementing premium IT products and services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor ovr-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/vison.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Vision</h4>
                        <p>Triangle Technologies Ltd is a leading IT company for Consulting Services and Deployment of
                            best of breed Business Solutions to top tier domestic and international customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->

    <!--Start 6-D Process-->
    <section class="client-section pad-tb wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Working Process</span>
                        <h2 class="mb-0">Our 6-D process</h2>
                    </div>
                </div>
            </div>
            <div class="itm-media-object tilt-3d">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend') }}/images/icons/discover.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Discover</h4>
                                <p>You might call us your not-so-typical web company. We zero-in on
                                    your business needs and custom-fit our developing softwares, digital marketing,
                                    design, IT managed services to solve your greatest tech challenges. We love what we
                                    do and we’re good at it. Let us prove it to you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend') }}/images/icons/define.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Define</h4>
                                <p>Triangle Technologies Ltd is a company whose primary products
                                    are various forms of software, software technology, distribution, and software
                                    product development. We make up the software industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                                    src="{{ asset('frontend') }}/images/icons/design.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Design</h4>
                                <p>Software design is the process by which a developer creates a
                                    specification of a software artifact, intended to accomplish goals, using a set of
                                    primitive components and subject to constraints.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend') }}/images/icons/development.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Develop</h4>
                                <p>Development is the process of conceiving, specifying, designing,
                                    programming, documenting, testing, and bug fixing involved in creating and
                                    maintaining applications, frameworks, or other software components.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                    src="{{ asset('frontend') }}/images/icons/deploy.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Deploy</h4>
                                <p>Deployment is all of the activities that make a software system
                                    available for use. The general deployment process consists of several interrelated
                                    activities with possible transitions between them. These activities can occur at the
                                    producer side or at the consumer side or both.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img
                                    src="{{ asset('frontend') }}/images/icons/deliver.svg" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Deliver</h4>
                                <p>Delivery is the process of getting a software product to market.
                                    Your particular “market” and “product” could be: An alpha product to an early
                                    adopter. The next release of an internal operations product. A first release of a
                                    main product for Triangle Technologies Ltd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End 6-D Process-->

    <!--Start Why Choose Us-->
    <section class="why-choos-lg pad-tb wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <h2 class="mb30">Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div id="accordion" class="accordion mt30">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card-1" style="background-color: #f9f9ff;">
                            <div class="card-header" id="faq1">
                                <button class="btn btn-link btn-block text-left card-title" type="button"
                                        data-toggle="collapse" data-target="#collapse-a" aria-expanded="true"
                                        aria-controls="collapse-a">
                                    <h4>Best Quality Designs</h4>
                                </button>
                            </div>
                            <div id="collapse-a" class="card-body collapse" aria-labelledby="faq1"
                                 data-parent="#accordion">
                                <p>Software design usually involves problem solving and planning a software solution. This includes both a low-level component and algorithm design and a high-level, architecture design.We always try to give our best to maintain the best quality </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-1" style="background-color: #f9f9ff;">
                            <div class="card-header" id="faq2">
                                <button class="btn btn-link btn-block text-left card-title collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapse-b" aria-expanded="true"
                                        aria-controls="collapse-b">
                                    <h4>24x7 Live Support</h4>
                                </button>
                            </div>
                            <div id="collapse-b" class="card-body collapse " aria-labelledby="faq2"
                                 data-parent="#accordion">
                                <p>Triangle Technology Ltd offer reasonable Service Level Agreements (SLA) covering most of the additional maintenance services. With our 24/7/365 days per year support, we are making troubleshooting as easy as possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose Us-->

    <!--Start statistics-->
    <div class="statistics-section why-choos-lg pad-tb tilt3d" style="background-color: #f9f9ff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000"
                             class="statistics-img d-flex justify-content-center align-items-center">
                            <i class="fas fa-laptop-code fa-3x" style="color: #B0BDFF;"></i>
                        </div>
                        <div class="statnumb">
                            <span class="counter">50</span>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000"
                             class="statistics-img d-flex justify-content-center align-items-center">
                            <i class="fas fa-users fa-3x" style="color: #B0BDFF;"></i>
                        </div>
                        <div class="statnumb counter-number">
                            <span class="counter">52</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000"
                             class="statistics-img d-flex justify-content-center align-items-center">
                            <i class="fas fa-terminal fa-3x" style="color: #B0BDFF;"></i>
                        </div>
                        <div class="statnumb">
                            <span class="counter">156</span><span>k+</span>
                            <p>Line Of Codes</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics mb0">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000"
                             class="statistics-img d-flex justify-content-center align-items-center">
                            <i class="fas fa-trophy fa-3x" style="color: #B0BDFF;"></i>
                        </div>
                        <div class="statnumb">
                            <span class="counter">28</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End statistics-->

    <!--CTA-->
    @include('frontend.page-sections.cta')
@endsection
