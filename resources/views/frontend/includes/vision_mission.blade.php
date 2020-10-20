<section class="ftco-section" id="vision_mission">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                {{-- <span class="subheading">About</span> --}}
                <h2 class="mb-4">{{ __('messages.our_vision_mission') }}</h2>
                {{-- <p>
                    Separated they live in. A small river named Duden
                    flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country
                </p> --}}
            </div>
        </div>
        <div class="ftco-departments">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link ftco-animate active col-md-6" id="v-pills-1-tab" data-toggle="pill"
                            href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                            aria-selected="true">{{ __('messages.vision') }}</a>

                        <a class="nav-link ftco-animate col-md-6" id="v-pills-2-tab" data-toggle="pill"
                            href="#v-pills-2" role="tab" aria-controls="v-pills-2"
                            aria-selected="false">{{ __('messages.mission') }}</a>
                    </div>
                </div>
                <div class="col-md-12 tab-wrap">
                    <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">
                        <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel"
                            aria-labelledby="day-1-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch"
                                        style="background-image: url({{ asset($abouts->image) }});">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    {{-- <h2>Our Vision</h2> --}}
                                    <p>
                                        {{ $abouts->vision }}
                                    </p>


                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                            <div class="row departments">
                                <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                                    <div class="img d-flex align-self-stretch"
                                        style="background-image: url({{ asset($abouts->image) }});">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    {{-- <h2>Our Mission</h2> --}}
                                    <p>
                                        {{ $abouts->mission }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
