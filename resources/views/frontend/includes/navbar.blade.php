<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        {{-- <p class="button-custom order-lg-last mb-0">
            <a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a>
        </p> --}}
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto standard_dropdown top_bar_dropdown">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="{{ route('/') }}" class="nav-link pl-0"></a>
                </li>



                {{-- <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                <a href="" class="nav-link">About</a>
                </li> --}}
                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>

                {{-- <li class="nav-item {{ (request()->is('departments')) ? 'active' : '' }}">
                <a href="department.html" class="nav-link">Departments</a>
                </li> --}}

            </ul>
        </div>

    </div>
</nav>
