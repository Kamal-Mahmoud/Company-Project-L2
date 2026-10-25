        <div class="pt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s"
            style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="mb-4 text-white">Get In Touch</h5>
                        <p><i
                                class="fa fa-map-marker-alt me-3"></i>{{ $setting->address ?? '123 Main Street, City, Country' }}
                        </p>
                        <p><i class="fa fa-phone-alt me-3"></i>{{ $setting->phone ?? '+012 345 67890' }}</p>
                        <p><i class="fa fa-envelope me-3"></i>{{ $setting->email ?? 'info@example.com' }}</p>
                        <div class="pt-2 d-flex">

                            @if ($setting->twitter)
                                <a class="btn btn-outline-light btn-social" href="{{ $setting->twitter }}"><i
                                        class="fab fa-twitter"></i></a>
                            @endif
                            @if($setting->facebook)
                                <a class="btn btn-outline-light btn-social" href="{{ $setting->facebook }}"><i
                                        class="fab fa-facebook-f"></i></a>
                                
                            @endif
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="mb-4 text-white">Quick Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="mb-4 text-white">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                </div>
            </div>
            @include('front.partials.copyright')
        </div>
