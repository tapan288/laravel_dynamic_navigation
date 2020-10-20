<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 logo">
                        <span>{{ $settings->site_name }}</span>
                    </h2>
                    <p>
                        {{ $settings->about }}
                    </p>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">{{ __('messages.have_a_question') }}</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon icon-map-marker"></span><span
                                    class="text">{{ $settings->address }}</span>
                            </li>
                            <li>
                                <a href="#"><span class="icon icon-phone"></span><span
                                        class="text">{{ $settings->contact }}</span></a>
                            </li>
                            <li>
                                <span class="icon icon-envelope"></span><span class="text"><a
                                        href="">{{ $settings->email }}</a></span>
                            </li>
                        </ul>
                    </div>

                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate">
                            <a href="{{ $settings->twitter_link }}" target="_blank"><span
                                    class="icon-twitter"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="{{ $settings->facebook_link }}" target="_blank"><span
                                    class="icon-facebook"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="{{ $settings->instagram_link }}" target="_blank"><span
                                    class="icon-instagram"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="{{ $settings->youtube_link }}" target="_blank"><span
                                    class="icon-youtube"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">{{ __('messages.links') }}</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('/') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>{{ __('messages.home') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.about') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>{{ __('messages.about') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('frontend.doctors') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>{{ __('messages.doctors') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.contact') }}"><span
                                    class="ion-ios-arrow-round-forward mr-2"></span>{{ __('messages.contact_us') }}</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Neurolgy</a>
                        </li>
                        <li>
                            <a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Dentist</a>
                        </li>
                        <li>
                            <a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ophthalmology</a>
                        </li>
                        <li>
                            <a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Cardiology</a>
                        </li>
                        <li>
                            <a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Surgery</a>
                        </li>
                    </ul>
                </div> --}}
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">{{ __('messages.opening_hours') }}</h2>
                    <h3 class="open-hours pl-4">
                        <span class="ion-ios-time mr-3"></span>{{ __('messages.we_are_open_24*7') }}
                    </h3>
                </div>
                {{-- <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Subscribe Us!</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center"
                                placeholder="Enter email address" />
                            <input type="submit" value="Subscribe" class="form-control submit px-3" />
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Prime Soft Services Pvt. Ltd.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg>
</div>
