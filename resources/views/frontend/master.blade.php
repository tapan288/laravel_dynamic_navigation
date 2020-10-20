<!DOCTYPE html>
<html lang="en">

<head>
    <title>MenuItems Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/main_styles.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/app/parsley.min.css')}}">
</head>

<body>

    @yield('content')



    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script> --}}
    {{-- <script src="{{ asset('frontend/js/google-map.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('backend/js/app/parsley.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
