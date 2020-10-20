<section class="ftco-section testimony-section bg-light" id="message">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">{{ __('messages.testimonials') }}</span>
                <h2 class="mb-4">{{ __('messages.our_directors_message') }}</h2>
                {{-- <p>
                    Separated they live in. A small river named Duden
                    flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country
                </p> --}}
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-8">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            {{-- <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)"></div> --}}
                            <div class="text ml-2 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>
                                    {{ $abouts->director_message }}
                                </p>
                                <p class="name">Director</p>
                                {{-- <span class="position">Farmer</span> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
