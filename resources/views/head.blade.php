{{-- <html>
    <html stuff>
    @yield('content')
</html> --}}

<head>
    <title>Pingalo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

      <!-- statistics -->
    {{-- <link href="{{ asset('assets/css/statistics/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/statistics/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/statistics/responsive.css') }}" rel="stylesheet">

    {{-- <script src="{{ asset('assets/js/statistics/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/statistics/Chart.min.js') }}"></script> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="{{ asset('assets/js/user.js') }}" defer></script>
    <script src="{{ asset('assets/js/homepage.js') }}" defer></script>




    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png" />
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet" />
    <!-- CSS files  -->
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

    <!-- Odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-car.css') }}" />
    <!-- Preloader css -->
    <link rel="stylesheet" type="{{ asset('text/css" href="assets/css/preloader.css') }}" />

    <!-- Animation css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style_homepage.css') }}" />


</head>
<header>
    <nav class="navbar navbar-expand-md bg-white navbar-expand-lg">
        <div class="container">
            <a href="{{url("/")}}">
                <img class="img-fluid logo" src="{{ asset('assets/images/logo/pingal.svg') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="d-md-flex align-items-lg-center navbar-nav ms-auto me-auto  me-left-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        {{-- <a class="nav-link" href="./portfolio.html">About us</a> --}}
                        <a class="nav-link" href="{{ url('/about') }}">About us</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/features') }}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contacts</a>
                    </li>
                </ul>
                @if (!session('users_id'))
                <ul class="d-flex align-items-lg-center navbar-nav ms-auto" role="search">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link reg-btn" aria-current="page" href="{{ url('register') }}">Register</a>
                    </li>
                </ul>
                @else
                <div class="d-flex  align-items-lg-center navbar-nav ms-auto" role="search">
                    <div class="dropdown">
                        <button class="dropdown-toggle user-profile" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/images/user-avatar.svg" alt="" />
                            <span>{{session('user')->name}}</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Account Settings</a></li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{url('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
</header>
