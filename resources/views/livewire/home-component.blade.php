<div>
    @section('title')
        Home
    @endsection
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
                                <a href=""><img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100"
                                        alt="#"></a>

                            </div>
                            <div class="carousel-item">
                                <a href=""><img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100"
                                        alt="#"></a>

                            </div>
                            <div class="carousel-item">
                                <a href=""><img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100"
                                        alt="#"></a>

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
                @if ($categories->count() > 0)
                    <div class="col-lg-12" style="margin-top: 30px;">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative">
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
                                                        <a href="javascript:void();"><img
                                                                class="rounded img-fluid w-100"
                                                                src="{{ asset('images/categories') }}/{{ $item->icon }}"
                                                                srcset="{{ asset('images/categories') }}/{{ $item->icon }}"
                                                                alt=""></a>
                                                        <div class="view-book">
                                                            <a href="{{ route('category', ['slug' => $item->slug]) }}"
                                                                class="btn btn-sm btn-white">Browse
                                                                Products</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pl-0 col-7">
                                                    <h6 class="mb-2">{{ $item->name }}</h6>
                                                    <p class="text-body">{{ $item->content->count() }} Products</p>
                                                    <a href="{{ route('category', ['slug' => $item->slug]) }}"
                                                        class="text-dark" tabindex="-1">Browse Products<i
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
                @if ($recentContent->count() > 0)
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="mb-0 iq-card-header d-flex justify-content-between align-items-center position-relative trendy-detail">
                                <div class="iq-header-title">
                                    <h4 class="mb-0 card-title">Recent Content</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="#!" class="btn btn-sm btn-primary view-more">View More</a>
                                </div>
                            </div>
                            <div class="iq-card-body trendy-contens">
                                <ul id="trendy-slider" class="p-0 mb-0 list-inline row">
                                    @foreach ($recentContent as $item)
                                        <li class="col-md-3">
                                            <div class="d-flex align-items-center">
                                                <div class="p-0 col-5 position-relative image-overlap-shadow">
                                                    <a
                                                        href="{{ route('content.details', ['reference' => $item->reference, 'slug' => $item->slug]) }}"><img
                                                            class="rounded img-fluid w-100"
                                                            src="{{ asset('images/thumbnails') }}/{{ $item->thumbnail }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="{{ route('content.details', ['reference' => $item->reference, 'slug' => $item->slug]) }}"
                                                            class="btn btn-sm btn-white">Details</a>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">{{ $item->title }}</h6>
                                                        <p class="mb-1 font-size-13 line-height">
                                                            By {{ $item->publisher->name }} |
                                                            <strong>{{ $item->tag->name }}</strong></p>
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
                                                        @if ($item->on_sale)
                                                            <span class="pr-1 old-price">Ksh
                                                                {{ $item->regular_price }}</span>
                                                            <h6><b>Ksh {{ $item->discount_price }}</b></h6>
                                                        @else
                                                            <h6><b>Ksh {{ $item->regular_price }}</b></h6>
                                                        @endif

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
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($nowTrending->count() > 0)
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="mb-0 iq-card-header d-flex justify-content-between align-items-center position-relative trendy-detail">
                                <div class="iq-header-title">
                                    <h4 class="mb-0 card-title">Trending Now </h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="#!" class="btn btn-sm btn-primary view-more">View More</a>
                                </div>
                            </div>
                            <div class="iq-card-body trendy-contens">
                                <ul id="trendy-slider" class="p-0 mb-0 list-inline row">
                                    @foreach ($nowTrending as $item)
                                        <li class="col-md-3">
                                            <div class="d-flex align-items-center">
                                                <div class="p-0 col-5 position-relative image-overlap-shadow">
                                                    <a
                                                        href="{{ route('content.details', ['reference' => $item->content->reference, 'slug' => $item->content->slug]) }}"><img
                                                            class="rounded img-fluid w-100"
                                                            src="{{ asset('images/thumbnails') }}/{{ $item->content->thumbnail }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="{{ route('content.details', ['reference' => $item->content->reference, 'slug' => $item->content->slug]) }}"
                                                            class="btn btn-sm btn-white">Details</a>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">{{ $item->content->title }}</h6>
                                                        <p class="mb-1 font-size-13 line-height">
                                                            By {{ $item->content->publisher->name }}|
                                                            <strong>{{ $item->content->tag->name }}</strong></p>
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
                                                        @if ($item->content->on_sale)
                                                            <span class="pr-1 old-price">Ksh
                                                                {{ $item->content->regular_price }}</span>
                                                            <h6><b>Ksh {{ $item->content->discount_price }}</b></h6>
                                                        @else
                                                            <h6><b>Ksh {{ $item->content->regular_price }}</b></h6>
                                                        @endif

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
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($experts->count() > 0)
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="mb-0 iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Our Experts</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="mb-0 list-inline row align-items-center iq-scrollable-block">
                                    @foreach ($experts as $item)
                                        <li class="mb-3 col-sm-6 d-flex align-items-center">
                                            <div class="mr-3 icon iq-icon-box">
                                                <a href="javascript:void();">
                                                    @if ($item->prifle_path)
                                                        <img class="img-fluid avatar-60 rounded-circle"
                                                            src="{{ asset('images/users') }}/{{ $item->profile_path }}"
                                                            alt="">
                                                    @else
                                                        <img class="img-fluid avatar-60 rounded-circle"
                                                            src="{{ $item->profile_photo_url }}" alt="">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="mt-1">
                                                <h6>{{ $item->name }}</h6>
                                                <p class="mb-0 text-primary">Published <span
                                                        class="text-body">{{ $item->publications->count() }}</span>
                                                    products</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($myPurchases->count() > 0)
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                <div class="iq-header-title">
                                    <h4 class="mb-0 card-title">My Puchases</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="#!" class="btn btn-sm btn-primary view-more">View More</a>
                                </div>
                            </div>
                            <div class="iq-card-body favorites-contens">
                                <ul id="favorites-slider" class="p-0 mb-0 list-inline row">
                                    @foreach ($myPurchases as $item)
                                        <li class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <div class="p-0 col-5 position-relative">
                                                    <a
                                                        href="{{ route('content.view', ['reference' => $item->reference]) }}">
                                                        <img src="{{ asset('images/thumbnails') }}/{{ $item->content->thumbnail }}"
                                                            class="rounded img-fluid w-100" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-7">
                                                    <h5 class="mb-2">{{ $item->content->title }}</h5>
                                                    <p class="mb-2">By
                                                        {{ $item->content->publisher->name }} |
                                                        <strong>{{ $item->content->tag->name }}</strong>
                                                    <p>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                        <span>Acquired</span>
                                                        <span class="mr-4">100%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar iq-bg-success">
                                                            <span class="bg-success" data-percent="100"></span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('content.view', ['reference' => $item->reference]) }}"
                                                        class="text-dark">Read Now<i
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
                            class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="mb-0 card-title">Most read blogs</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="#!" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body favorites-contens">
                            <ul id="favorites-slider" class="p-0 mb-0 list-inline row">
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/05.jpg') }}"
                                                    class="rounded img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                            <p class="mb-2">Author : Pedro Araez</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Read </span>
                                                <span class="mr-4">78 times</span>
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
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/06.jpg') }}"
                                                    class="rounded img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Casey Christie night book into find...</h5>
                                            <p class="mb-2">Author : Michael klock</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Read</span>
                                                <span class="mr-4">78 times</span>
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
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/07.jpg') }}"
                                                    class="rounded img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The Secret to English Busy People..</h5>
                                            <p class="mb-2">Author : Daniel Ace</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Read </span>
                                                <span class="mr-4">78 times</span>
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
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="p-0 col-5 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/08.jpg') }}"
                                                    class="rounded img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The adventures of Robins books...</h5>
                                            <p class="mb-2">Author : Luka Afton</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Read </span>
                                                <span class="mr-4">78 times</span>
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
