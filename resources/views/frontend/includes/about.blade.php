{{-- <section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5">
                        <span class="subheading">About Dr.care</span>
                        <h2 class="mb-4" style="font-size: 28px;">
                            Medical specialty concerned with the care of
                            acutely ill hospitalized patients
                        </h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                    <p>
                        On her way she met a copy. The copy warned the
                        Little Blind Text, that where it came from it
                        would have been rewritten a thousand times and
                        everything that was left from its origin would
                        be the word.
                    </p>
                    <div class="row mt-5 pt-2">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first-aid-kit"></span>
                                </div>
                                <div class="text">
                                    <h3>Primary Care</h3>
                                    <p>
                                        Far far away, behind the word
                                        mountains, far from the
                                        countries Vokalia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-dropper"></span>
                                </div>
                                <div class="text">
                                    <h3>Lab Test</h3>
                                    <p>
                                        Far far away, behind the word
                                        mountains, far from the
                                        countries Vokalia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-experiment-results"></span>
                                </div>
                                <div class="text">
                                    <h3>Symptom Check</h3>
                                    <p>
                                        Far far away, behind the word
                                        mountains, far from the
                                        countries Vokalia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <span class="flaticon-heart-rate"></span>
                                </div>
                                <div class="text">
                                    <h3>Heart Rate</h3>
                                    <p>
                                        Far far away, behind the word
                                        mountains, far from the
                                        countries Vokalia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row no-gutters">

            <div class="col-md-12 wrap-about py-4 py-md-5 ftco-animate">
                <div class="heading-section mb-5 mr-5">
                    <div class="pl-md-5 ml-md-5">
                        <h3 class="text-center">{{ __('messages.about_header') }}</h3>
                    </div>
                </div>
                {!! $about->content !!}
            </div>
        </div>
    </div>
</section>
