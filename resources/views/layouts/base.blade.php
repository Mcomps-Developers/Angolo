<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Angolo Expert</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @livewireStyles
</head>
<div id="loading">
    <div id="loading-center">
    </div>
</div>

<div class="wrapper">
    <!-- Sidebar  -->
    <div class="iq-sidebar">
        <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="/" class="header-logo">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                <div class="logo-title">
                    <span class="text-primary text-uppercase">Angolo</span>
                </div>
            </a>
            <div class="iq-menu-bt-sidebar">
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
        @livewire('element.side-bar')
    </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="p-0 navbar navbar-expand-lg navbar-light">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="/" class="header-logo">
                            <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Angolo</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    @if (Route::has('login'))
                        @auth

                            @if (Auth::user()->utype === 'adm')
                                <h5 class="mb-0">Admin User</h5>
                            @elseif (Auth::user()->utype === 'slr')
                                <h5 class="mb-0">Expert</h5>
                            @elseif (Auth::user()->utype === 'sadm')
                                <h5 class="mb-0">Super User</h5>
                            @else
                                <h5 class="mb-0">Angolo Expert</h5>
                            @endif
                        @else
                            <h5 class="mb-0">Angolo Expert</h5>
                        @endauth
                    @endif


                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'adm')
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                    @elseif (Auth::user()->utype === 'slr')
                                        <li class="breadcrumb-item"><a href="{{ route('expert.dashboard') }}">Dashboard</a>
                                        </li>
                                    @elseif (Auth::user()->utype === 'sadm')
                                        <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Dashboard</a>
                                        </li>
                                    @else
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    @endif
                                @endauth
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ul>
                    </nav>
                </div>
                <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Search Here...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="ml-auto navbar-nav navbar-list">
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="rounded search-toggle iq-waves-effect text-gray">
                                <i class="ri-search-line"></i>
                            </a>
                            <form action="#" class="p-0 search-box">
                                <input type="text" class="text search-input" placeholder="Type here to search...">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            </form>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item nav-icon">
                                    <a href="#" class="rounded search-toggle iq-waves-effect text-gray">
                                        <i class="ri-notification-2-line"></i>
                                        <span class="bg-primary dots"></span>
                                    </a>
                                    @livewire('element.notification-component')
                                </li>
                            @endauth
                        @endif
                        @if (!Auth::check())
                            <li class="nav-item nav-icon">
                                <div class="p-3 text-center d-inline-block w-100">
                                    <a class="bg-primary iq-sign-btn" href="{{ route('login') }}"
                                        role="button">Login<i class="ml-2 ri-login-box-line"></i></a>
                                </div>
                            </li>
                        @endif

                        <li class="pt-3 line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->profile_photo_path)
                                            <img src="{{ asset('images/users') }}/{{ Auth::user()->profile_photo_path }}"
                                                class="mr-3 img-fluid rounded-circle" alt="">
                                        @else
                                            <img src="{{ Auth::user()->profile_photo_url }}"
                                                class="mr-3 img-fluid rounded-circle" alt="">
                                        @endif

                                        <div class="caption">

                                            <h6 class="mb-1 line-height">{{ Auth::user()->name }}</h6>
                                            <p class="mb-0 text-primary">Ksh {{ Auth::user()->wallet->balance }}</p>
                                        </div>
                                    @endauth
                                @endif
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="m-0 shadow-none iq-card">
                                    <div class="p-0 iq-card-body ">
                                        @if (Route::has('login'))
                                            @auth
                                                <div class="p-3 bg-primary">

                                                    <h5 class="mb-0 text-white line-height">Hello {{ Auth::user()->name }}
                                                    </h5>
                                                    <span class="text-white font-size-12">Online</span>

                                                </div>
                                                <a href="{{ route('profile.edit') }}"
                                                    class="iq-sub-card iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-file-user-line"></i>
                                                        </div>
                                                        <div class="ml-3 media-body">
                                                            <h6 class="mb-0 ">My Profile</h6>
                                                            <p class="mb-0 font-size-12">My Profile.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#!" class="iq-sub-card iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                        <div class="ml-3 media-body">
                                                            <h6 class="mb-0 ">Privacy Settings</h6>
                                                            <p class="mb-0 font-size-12">Control your privacy parameters.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="p-3 text-center d-inline-block w-100">
                                                    <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                                        role="button">Sign
                                                        out<i class="ml-2 ri-login-box-line"></i></a>
                                                    <form id="logout-form" method="POST"
                                                        action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </div>
                                            @endauth
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    {{ $slot }}

    </body>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="mb-0 list-inline">
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="text-right col-lg-6">
                    Copyright <span id="copyright">
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                        {{ config('app.name', 'Angolo Expert') }}. All Rights Reserved.
                    </span> Powered By <a href="https://mcomps.co.ke"><b>Mcomps</b></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- color-customizer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('js/lottie.js') }}"></script>
    <!-- am core JavaScript -->
    <script src="{{ asset('js/core.js') }}"></script>
    <!-- am charts JavaScript -->
    <script src="{{ asset('js/charts.js') }}"></script>
    <!-- am animated JavaScript -->
    <script src="{{ asset('js/animated.js') }}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ asset('js/kelly.js') }}"></script>
    <!-- am maps JavaScript -->
    <script src="{{ asset('js/maps.js') }}"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{ asset('js/worldLow.js') }}"></script>
    <!-- Raphael-min JavaScript -->
    <script src="{{ asset('js/raphael-min.js') }}"></script>
    <!-- Morris JavaScript -->
    <script src="{{ asset('js/morris.js') }}"></script>
    <!-- Morris min JavaScript -->
    <script src="{{ asset('js/morris.min.js') }}"></script>
    <!-- Flatpicker Js -->
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('js/style-customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            var preloader = document.querySelector(".loader-bg");
            preloader.style.display = "none";
        });
    </script>
    <script src="https://cdn.tiny.cloud/1/bgdq7g4g6ayln7vwvep8a0v2fxye8wj7oi8o0gbtvamslur1/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    @livewireScripts
    </body>

</html>
