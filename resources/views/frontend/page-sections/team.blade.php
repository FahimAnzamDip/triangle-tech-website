<!--Start Team Members-->
<section class="why-choos-lg pad-tb deep-dark wow fadeIn" data-wow-delay="0.2s" style="background-color: #f9f9ff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Team Members</span>
                    <h2>Meet The Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($members as $member)
            <div class="col-lg-3 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><img src="{{ asset('frontend/images/member_placeholder.jpg') }}" data-src="{{ asset('storage/member_images') . '/' . $member->member_image }}" alt="team" class="img-fluid lazy" /></div>
                    <div class="info-text-block">
                        <ul class="d-flex list-unstyled my-3 team-social">
                            <li class="list-item mr-3"><a href="mailto:{{ $member->member_email }}"><i class="fas fa-envelope"></i></a>
                            </li>
                            <li class="list-item mr-3"><a rel="noreferrer" href="{{ $member->member_linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li class="list-item"><a rel="noreferrer" href="{{ $member->member_facebook }}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                        </ul>
                        <h4 class="mb-0">{{ $member->member_name }}</h4>
                        <p class="text-left">{{ $member->member_designation }}</p>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-info text-center">No Team Members Available</div>
            @endforelse
        </div>
    </div>
</section>
<!--End Team Members-->
