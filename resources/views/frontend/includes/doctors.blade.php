<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">{{ __('messages.doctors') }}</span>
                <h2 class="mb-4">{{ __('messages.our_qualified_doctors') }}</h2>
                {{-- <p>
                    Separated they live in. A small river named Duden
                    flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country
                </p> --}}
            </div>
        </div>
        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{ asset($doctor->image) }});">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Dr. {{ $doctor->name }}</h3>
                        <span class="position mb-2">{{ $doctor->category->name }}</span>
                        <div class="faded">
                            <p>
                                {{ $doctor->about }}
                            </p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a href="{{ $doctor->twitter_link }}"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="{{ $doctor->facebook_link }}"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="{{ $doctor->instagram_link }}"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
