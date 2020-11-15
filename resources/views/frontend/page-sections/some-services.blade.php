<!--Start Service-->
<section class="service-section pad-tb wow fadeIn" data-wow-delay="0.2s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Services We’re Provided</span>
                    <h2 class="mb30">How Can We Help You?</h2>
                </div>
            </div>
        </div>
        <div class="row upset link-hover shape-num justify-content-center">
            @forelse($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-6 mt30 shape-loc">
                <div class="s-block h-100 up-hor bd-hor-base">
                    <div class="s-card-icon"><img src="{{ asset('storage/service_images') . '/' . $service->service_image }}" alt="service" class="img-fluid" />
                    </div>
                    <h4>{{ $service->service_name }}</h4>
                    <p>{{ $service->service_description }}</p>
                </div>
            </div>
            @empty
                <div class="alert alert-info text-center">No Service Available</div>
            @endforelse
        </div>
        <div class="row  mt-5">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('all.services.page') }}" class="btn-main bg-btn3 lnk">View All Services<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->
