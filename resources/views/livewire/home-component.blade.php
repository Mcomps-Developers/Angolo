<div>
    @section('title')
        Home
    @endsection
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" style="height: 180px">
                            <div class="carousel-item active">
                                <a href=""><img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100" alt="#"></a>
                                
                            </div>
                            <div class="carousel-item">
                                <a href=""><img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100" alt="#"></a>
                                
                            </div>
                            <div class="carousel-item">
                                <a href=""><img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100" alt="#"></a>
                                
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
                @if($categories->count()>0)
                <div class="col-lg-12" style="margin-top: 30px;">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="mb-0 card-title">Our Categories</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="#!" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body single-similar-contens">
                            <ul id="single-similar-slider" class="p-0 mb-0 list-inline row">
                                @foreach ($categories as $item)
                                    <li class="col-md-3">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <div class="position-relative image-overlap-shadow">
                                                <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                        src="images/categories/{{ $item->icon }}" srcset="images/categories/{{ $item->icon }}" alt=""></a>
                                                <div class="view-book">
                                                    <a href="#!" class="btn btn-sm btn-white">Browse</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-0 col-7">
                                            <h6 class="mb-2">{{$item->name}}</h6>
                                            <p class="text-body">0 : Items</p>
                                            <a href="#!" class="text-dark" tabindex="-1">Browse<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach                                
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="mb-0 iq-card-header d-flex justify-content-between align-items-center position-relative trendy-detail">
                            <div class="iq-header-title">
                                <h4 class="mb-0 card-title">Recent Content</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body trendy-contens">
                            <ul id="trendy-slider" class="p-0 mb-0 list-inline row">
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                    src="{{asset('images/trendy-books/01.jpg')}}" alt=""></a>
                                            <div class="view-book">
                                                <a href="{{route('book.page')}}" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The Word Books Day..</h6>
                                                <p class="mb-1 font-size-13 line-height">Paul Molive</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">Ksh 99</span>
                                                <h6><b>Ksh 89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                    src="{{asset('images/trendy-books/02.jpg')}}" alt=""></a>
                                            <div class="view-book">
                                                <a href="{{route('book.page')}}" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The catcher in the Rye</h6>
                                                <p class="mb-1 font-size-13 line-height">Anna Sthesia</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">Ksh 89</span>
                                                <h6><b>Ksh 79</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                    src="{{asset('images/trendy-books/03.jpg')}}" alt=""></a>
                                            <div class="view-book">
                                                <a href="{{route('book.page')}}" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Little Black Book</h6>
                                                <p class="mb-1 font-size-13 line-height">Monty Carlo</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">Ksh 100</span>
                                                <h6><b>Ksh 89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                    src="{{asset('images/trendy-books/04.jpg')}}" alt=""></a>
                                            <div class="view-book">
                                                <a href="{{route('book.page')}}" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Take The Risk Book</h6>
                                                <p class="mb-1 font-size-13 line-height">Smith goal</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">Ksh 120</span>
                                                <h6><b>Ksh 99</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                    src="{{asset('images/trendy-books/05.jpg')}}" alt=""></a>
                                            <div class="view-book">
                                                <a href="{{route('book.page')}}" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The Raze Night Book </h6>
                                                <p class="mb-1 font-size-13 line-height">Paige Turner</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">Ksh 150</span>
                                                <h6><b>Ksh 129</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="rounded img-fluid w-100"
                                                    src="{{asset('images/trendy-books/06.jpg')}}" alt=""></a>
                                            <div class="view-book">
                                                <a href="{{route('book.page')}}" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Find the Wave Book..</h6>
                                                <p class="mb-1 font-size-13 line-height">Barb Ackue</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">Ksh 120</span>
                                                <h6><b>Ksh 100</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="mb-0 iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Our Experts</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="p-0 dropdown-toggle text-body" id="dropdownMenuButton3"
                                        data-toggle="dropdown">
                                        This Week<i class="ri-arrow-down-s-fill"></i>
                                    </span>
                                    <div class="shadow-none dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton3">
                                        <a class="dropdown-item" href="#"><i
                                                class="mr-2 ri-eye-fill"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="mr-2 ri-delete-bin-6-fill"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="mr-2 ri-pencil-fill"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="mr-2 ri-printer-fill"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="mr-2 ri-file-download-fill"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="mb-0 list-inline row align-items-center iq-scrollable-block">
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/01.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Brandon Guidelines</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/02.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Hugh Millie-Yate</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">432</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/03.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Nathaneal Down</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">5471</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/04.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Thomas R. Toe</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">8764</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/05.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Druid Wensleydale</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">8987</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/06.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/07.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Desmond Eagle</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">4324</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/08.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Lurch Schpellchek</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">012</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/09.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/10.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/11.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="mb-3 col-sm-6 d-flex align-items-center">
                                    <div class="mr-3 icon iq-icon-box">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/01.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="mb-0 card-title">My Puchases</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="/category" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body favorites-contens">
                            <ul id="favorites-slider" class="p-0 mb-0 list-inline row">
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/01.jpg" class="rounded img-fluid w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                            <p class="mb-2">Author : Pedro Araez</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-primary">
                                                    <span class="bg-primary" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/02.jpg') }}"
                                                    class="rounded img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Casey Christie night book into find...</h5>
                                            <p class="mb-2">Author : Michael klock</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-danger">
                                                    <span class="bg-danger" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/03.jpg" class="rounded img-fluid w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The Secret to English Busy People..</h5>
                                            <p class="mb-2">Author : Daniel Ace</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-info">
                                                    <span class="bg-info" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/04.jpg') }}"
                                                    class="rounded img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The adventures of Robins books...</h5>
                                            <p class="mb-2">Author : Luka Afton</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-success">
                                                    <span class="bg-success" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
