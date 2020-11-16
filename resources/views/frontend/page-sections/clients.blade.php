<!--Start Clients-->
@if($clients)
<section class="client-section pad-tb wow fadeIn" data-wow-delay="0.2s" style="background:#f9f9ff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Our Clients</span>
                    <h2 class="mb30">Who We've Worked With</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="owl-carousel testimonial-card-a">
                    @foreach($clients as $client)
                    <div>
                        <a href="{{ $client->client_link }}"><img width="32" src="{{ asset('storage/client_images') . '/' . $client->client_image }}" alt="{{ $client->client_name }}"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--End Clients-->
