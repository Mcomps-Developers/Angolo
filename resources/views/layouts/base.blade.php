<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')|Angolo Experts</title>
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
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    @if (Auth::user()->utype==='byr')
                    <li class="active active-menu">  
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                            class="ripple rippleEffect"></span><i
                            class="las la-home iq-arrow-left"></i><span>Shop</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                    @else
                    <li>
                        
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                                class="ripple rippleEffect"></span><i
                                class="las la-home iq-arrow-left"></i><span>Shop</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                @endif
                        
                            <li class="active"><a href="/"><i class="las la-house-damage"></i>Home Page</a></li>
                            <li><a href="/category"><i class="ri-function-line"></i>Category Page</a></li>
                            <li><a href="/book-page"><i class="ri-book-line"></i>Book Page</a></li>
                            <li><a href="/book-pdf"><i class="ri-file-pdf-line"></i>Book PDF</a></li>
                            <li><a href="/checkoot"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                            <li><a href="/wishlist"><i class="ri-heart-line"></i>wishlist</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->utype==='adm')
                        <li class="active active-menu">
                        <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                                class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{route('admin.dashboard')}}"><i class="ri-dashboard-line"></i>Dashboard</a></li>
                            <li><a href="{{route('admin.categories')}}"><i class="ri-list-check-2"></i>Categories</a></li>
                            <li><a href="{{route('admin.experts')}}"><i class="ri-file-user-line"></i>Experts</a></li>
                            <li><a href="{{route('admin.content')}}"><i class="ri-book-2-line"></i>Content</a></li>
                            <li><a href="{{route('users')}}"><i class="las la-th-list"></i>Users</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
            <div id="sidebar-bottom" class="p-3 position-relative">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="sidebarbottom-content">
                            <div class="image"><img src="{{ asset('images/page-img/side-bkg.png') }}"
                                    alt=""></div>
                            <button type="submit" class="mt-4 btn w-100 btn-primary view-more">Become
                                Membership</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal"
                                alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Angolo</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    <h5 class="mb-0">Shop</h5>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            @if(Auth::user()->utype==='adm')
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            @elseif (Auth::user()->utype==='slr')
                            <li class="breadcrumb-item"><a href="{{route('expert.dashboard')}}">Dashboard</a></li>
                            @elseif (Auth::user()->utype==='sadm')
                            <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Dashboard</a></li>
                            @else
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                        <li class="nav-item nav-icon">
                            <a href="#" class="rounded search-toggle iq-waves-effect text-gray">
                                <i class="ri-notification-2-line"></i>
                                <span class="bg-primary dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="m-0 shadow-none iq-card">
                                    <div class="p-0 iq-card-body">
                                        <div class="p-3 bg-primary">
                                            <h5 class="mb-0 text-white">All Notifications<small
                                                    class="float-right pt-1 badge badge-light">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40"
                                                        src="{{ asset('images/user/01.jpg') }}" alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Emma Watson Barry</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40"
                                                        src="{{ asset('images/user/02.jpg') }}" alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                    <p class="mb-0">Cyst Barry</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40"
                                                        src="{{ asset('images/user/03.jpg') }}" alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Two customer is left</h6>
                                                    <small class="float-right font-size-12">2 days ago</small>
                                                    <p class="mb-0">Cyst Barry</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40"
                                                        src="{{ asset('images/user/04.jpg') }}" alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                    <small class="float-right font-size-12">3 days ago</small>
                                                    <p class="mb-0">Cyst Barry</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="rounded search-toggle iq-waves-effect text-gray">
                                <i class="ri-mail-line"></i>
                                <span class="bg-primary dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="m-0 shadow-none iq-card">
                                    <div class="p-0 iq-card-body ">
                                        <div class="p-3 bg-primary">
                                            <h5 class="mb-0 text-white">All Messages<small
                                                    class="float-right pt-1 badge badge-light">5</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40" src="images/user/01.jpg"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Barry Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40" src="images/user/02.jpg"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                    <small class="float-left font-size-12">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40" src="images/user/03.jpg"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40" src="images/user/04.jpg"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Variations Passages</h6>
                                                    <small class="float-left font-size-12">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded avatar-40" src="images/user/05.jpg"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                    <small class="float-left font-size-12">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="rounded search-toggle iq-waves-effect text-gray">
                                <i class="ri-shopping-cart-2-line"></i>
                                <span class="badge badge-danger count-cart rounded-circle">4</span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="m-0 shadow-none iq-card">
                                    <div class="p-0 iq-card-body toggle-cart-info">
                                        <div class="p-3 bg-primary">
                                            <h5 class="mb-0 text-white">All Carts<small
                                                    class="float-right pt-1 badge badge-light">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ asset('images/cart/01.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Night People book</h6>
                                                    <p class="mb-0">$32</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ asset('images/cart/02.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">The Sin Eater Book</h6>
                                                    <p class="mb-0">$40</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ asset('images/cart/03.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">the Orange Tree</h6>
                                                    <p class="mb-0">$30</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ asset('images/cart/04.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Harsh Reality book</h6>
                                                    <p class="mb-0">$25</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <div class="p-3 text-center d-flex align-items-center">
                                            <a class="mr-2 btn btn-primary iq-sign-btn" href="#"
                                                role="button">View Cart</a>
                                            <a class="btn btn-primary iq-sign-btn" href="#" role="button">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-3 line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="{{ asset('images/user/1.jpg') }}" class="mr-3 img-fluid rounded-circle"
                                    alt="user">
                                <div class="caption">
                                    <h6 class="mb-1 line-height">{{ Auth::user()->name }}</h6>
                                    <p class="mb-0 text-primary">$20.32</p>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="m-0 shadow-none iq-card">
                                    <div class="p-0 iq-card-body ">
                                        <div class="p-3 bg-primary">
                                            <h5 class="mb-0 text-white line-height">Hello {{ Auth::user()->name }}
                                            </h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <a href="{{ route('user.profile') }}"
                                            class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">My Profile</h6>
                                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('profile.edit') }}"
                                            class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-profile-line"></i>
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Edit Profile</h6>
                                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{route('account.settings')}}" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-account-box-line"></i>
                                                </div>
                                                <div class="ml-3 media-body">
                                                    <h6 class="mb-0 ">Account settings</h6>
                                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
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
                                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="p-3 text-center d-inline-block w-100">
                                            <a class="bg-primary iq-sign-btn" href="#!" role="button">Sign
                                                out<i class="ml-2 ri-login-box-line"></i></a>
                                        </div>
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
                         Angolo Experts. All Rights Reserved. 
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
    @livewireScripts
    </body>

</html>
