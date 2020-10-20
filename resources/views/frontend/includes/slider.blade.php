<section class="home-slider owl-carousel">
    @foreach ($sliders as $slider)
    <div class="slider-item" style="background-image:url({{ asset($slider->image) }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 text ftco-animate">
                    <h1 class="mb-4">
                        {{ $slider->sub_heading }}<span>{{ $slider->heading }}</span>
                    </h1>
                    <h3 class="subheading">
                        {{ $slider->description }}
                    </h3>
                    {{-- <p>
                        <a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>
