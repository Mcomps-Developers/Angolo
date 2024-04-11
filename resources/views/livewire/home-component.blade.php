<div>
    @section('title')
        Home
    @endsection
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 30px;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($sliders as $key => $item)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                                    class="{{ $key == 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" style="height: 240px">
                            @foreach ($sliders as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <a href=""><img src="{{ asset('images/sliders') }}/{{ $item->image }}"
                                            class="d-block w-100" alt="#"></a>
                                </div>
                            @endforeach
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
                    <div class="col-lg-12">
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
                @if ($nowTrending->count() > 10)
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="mb-0 iq-card-header d-flex justify-content-between align-items-center position-relative trendy-detail">
                                <div class="iq-header-title">
                                    <h4 class="mb-0 card-title">Trending Now</h4>
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
                                                        href="{{ route('content.details', ['reference' => $item->contennt->reference, 'slug' => $item->contennt->slug]) }}"><img
                                                            class="rounded img-fluid w-100"
                                                            src="{{ asset('images/thumbnails') }}/{{ $item->contennt->thumbnail }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="{{ route('content.details', ['reference' => $item->contennt->reference, 'slug' => $item->contennt->slug]) }}"
                                                            class="btn btn-sm btn-white">Details</a>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">{{ $item->contennt->title }}</h6>
                                                        <p class="mb-1 font-size-13 line-height">
                                                            By {{ $item->contennt->publisher->name }} |
                                                            <strong>{{ $item->contennt->tag->name }}</strong>
                                                        </p>
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
                                                        @if ($item->contennt->on_sale)
                                                            <span class="pr-1 old-price">Ksh
                                                                {{ $item->contennt->regular_price }}</span>
                                                            <h6><b>Ksh {{ $item->contennt->discount_price }}</b></h6>
                                                        @else
                                                            <h6><b>Ksh {{ $item->contennt->regular_price }}</b></h6>
                                                        @endif

                                                    </div>
                                                    {{-- <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                @elseif ($recentContent->count() > 0)
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
                                                            <strong>{{ $item->tag->name }}</strong>
                                                        </p>
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
                                                    {{-- <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($blogs->count() > 0)
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
                                    @foreach ($blogs as $item)
                                        <li class="col-md-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="p-0 col-5 position-relative">
                                                    <a href="javascript:void();">
                                                        <img src="{{ asset('images/blogs/thumbnails') }}/{{ $item->thumbnail }}"
                                                            class="rounded img-fluid w-100" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-7">
                                                    <h5 class="mb-2">{{ $item->title }}</h5>
                                                    <p class="mb-2">Author : {{ $item->author->name }}</p>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                        <span>Read </span>
                                                        <span class="mr-4">{{ $item->views }} times</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar iq-bg-success">
                                                            <span class="bg-success"
                                                                data-percent="{{ $item->views }}"></span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('blog.details', ['reference' => $item->reference, 'slug' => $item->slug]) }}"
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

            </div>
        </div>
    </div>
</div>
