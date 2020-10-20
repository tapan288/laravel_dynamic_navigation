<section class="ftco-services ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            @foreach ($services as $service)
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="{{ $service->icon }}"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">{{ $service->title }}</h3>
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
