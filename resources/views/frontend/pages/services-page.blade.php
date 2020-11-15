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
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/android-ios.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Android / IOS</h4>
                        <p>Our App development, as well as the growth of our app, will depend on the platform you
                            choose. We build dynamic and well structured software which is user friendly and responsive.
                            Try US, Our expert team are looking forward to you.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/web-development.svg" alt="service" class="img-fluid" /></div>
                        <h4>Website Development</h4>
                        <p>Your website identifies you as a business or organization. It is not just a domain and some
                            pages with a graphic and some text, We listen to you, analyze and understand your business.
                            We always focus on customer need and satisfactions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/hrm-erp.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>HRM / ERP Software</h4>
                        <p>If you ever need to manage your employee in digital way, you are in right place. It merges
                            human resources as a discipline and, in particular, its basic HR activities and processes
                            with the information technology field.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/branding.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Marketing/ Digital Promotion (SEO)</h4>
                        <p>Marketing is the business process of creating relationships with and satisfying customers. So
                            if you want to promote/SEO your business our expert team is ready to discuss with you.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/consulting.svg" alt="service" class="img-fluid" /></div>
                        <h4>IT Consultation</h4>
                        <p>TTL has experienced professionals who advise on, plan, design, install startup company and
                            various ideas for developing your business. We have strong interpersonal and communication
                            skills to deal effectively with clients.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/graphics-design.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Graphics Design</h4>
                        <p>We have included in Graphics Dept.: Logo Design, Stationary Design, Corporate Brochure
                            Design, Business Leaflets and cards, Custom Invitation Card, Trade show and exhibition
                            Designs, Newsletter design and T-shirt design.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/hosting.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Domain Hosting</h4>
                        <p>Web hosting is the place where all the files of your website live. TTL provides unlimited
                            storage, emails, SSL certificates, and many more exciting services with reasonable prices.
                            Feel free to contact with us regarding this issue.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/mobile-communication.svg" alt="service"
                                                      class="img-fluid" /></div>
                        <h4>Mobile Communication</h4>
                        <p>Mobile communication is talking, texting or sending data or image files over a wireless
                            network.We have now included fixed-network services (data retail, Internet retail, voice
                            retail and wholesale) and mobile services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/networking.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Computer Networking</h4>
                        <p>The most common resource shared today is connection to the Internet. Our purpose of
                            networking is the exchange of information, advice to assist in attaining your goal of
                            changing careers.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/robotics.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Robotics ( Arduino )</h4>
                        <p>Arduino is an open-source electronics platform based on easy-to-use hardware and software.
                            Arduino boards are able to read inputs and turn it into an output - activating a motor,
                            turning on an LED, publishing something online.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/ecommerce.svg" alt="service" class="img-fluid" /></div>
                        <h4>E-Commerce</h4>
                        <p>We provide online marketing over the internet network.You can buy your desired products
                            through our TTL platform. Currently we are offering T shirts, shirts and womens wear as well
                            as baby attire.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                    <div class="s-block h-100 up-hor bd-hor-base">
                        <div class="s-card-icon"><img src="{{ asset('frontend') }}/images/icons/car-repair.svg" alt="service" class="img-fluid" />
                        </div>
                        <h4>Car Servicing</h4>
                        <p>You will be surprised by knowing that we have car servicing workshop so that anyone can
                            contact with us over online! our agents will contact with you in a real soon after your
                            acknowledgement. Save your time.</p>
                    </div>
                </div>
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
                        <p class="cta-call font-weight-bold">OR Call Us Now <a href="tel:+8801904654712" style="letter-spacing: 2px;"><i class="fas fa-phone-alt"></i> +8801904654712</a></p>
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
