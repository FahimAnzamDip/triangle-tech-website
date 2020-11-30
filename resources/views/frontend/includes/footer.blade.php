<footer class="pt60">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-sm-6  ftr-brand-pp">
                <a class="navbar-brand mb30 mt30" href="#"> <img width="180" src="{{ asset('frontend') }}/images/ttl-logo.png" alt="Logo"/></a>
                <p>You can know more about us via our social links below. Thank You!</p>
                <div class="ff-social-icons mt30">
                    <a href="{{ \App\Models\Contact::first()->facebook_link }}" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="{{ \App\Models\Contact::first()->linkedin_link }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="{{ \App\Models\Contact::first()->github_link }}" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <h2 style="font-size: 20px;line-height: 30px;" class="mb30 mt30">Contact Us</h2>
                <ul class="footer-address-list ftr-details">
                    <li>
                        <span><i class="fas fa-envelope"></i></span>
                        <p>Email <span> <a href="mailto:{{ \App\Models\Contact::first()->email }}">{{ \App\Models\Contact::first()->email }}</a></span></p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone-alt"></i></span>
                        <p>Phone
                            <span><a href="tel:{{ \App\Models\Contact::first()->phone_one }}">{{ \App\Models\Contact::first()->phone_one }}</a></span>
                            <span><a href="tel:{{ \App\Models\Contact::first()->phone_two }}">{{ \App\Models\Contact::first()->phone_two }}</a></span>
                        </p>
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Address <span> {{ \App\Models\Contact::first()->address }}</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h2 style="font-size: 20px;line-height: 30px;" class="mb30 mt30">Important Links</h2>
                <ul class="footer-address-list link-hover">
                    <li><a href="{{ route('home.page') }}">Home</a></li>
                    <li><a href="{{ route('about.page') }}">About</a></li>
                    <li><a href="{{ route('all.services.page') }}">Services</a></li>
                    <li><a href="{{ route('prices.page') }}">Development Prices</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h2 style="font-size: 20px;line-height: 30px;" class="mb30 mt30">Useful Links</h2>
                <ul class="footer-address-list link-hover">
                    <li><a href="{{ route('home.page') }}">Projects</a></li>
                    <li><a href="{{ route('home.page') }}">Our Team</a></li>
                    <li><a href="{{ route('all.services.page') }}">Customers</a></li>
                    <li><a href="{{ route('about.page') }}">Facts</a></li>
                </ul>
            </div>
        </div>
        <div class="row end-footer-">
            <div class="col-12">
                <div class="footer-copyrights- text-center">
                    <p><a class="text-dark"
                          href="https://triangeltech.com/">Triangle Technologies Ltd</a>. Copyright © {{ date('Y') }}. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
