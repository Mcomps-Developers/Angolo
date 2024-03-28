<main>
    @section('title')
        Tag: {{ $tag->name }}
    @endsection
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-0 iq-card-transparent">
                            <div class="text-center d-block">
                                <h2 class="mb-3"> Tag: {{ $tag->name }}</h2>
                            </div>
                        </div>

                        <div class="iq-card">
                            <div class="iq-card-body">
                                <div class="row">
                                    @foreach ($products as $item)
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div
                                                class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                                <div class="p-0 iq-card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="p-0 col-6 position-relative image-overlap-shadow">
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
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <h6 class="mb-1">{{ $item->title }}</h6>
                                                                <p class="mb-1 font-size-13 line-height">
                                                                    By {{ $item->publisher->name }}
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
                                                            <div class="iq-product-action">
                                                                <a href="javascript:void();"><i
                                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                                <a href="javascript:void();" class="ml-2"><i
                                                                        class="ri-heart-fill text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                <div class="iq-header-title">
                                    <h4 class="mb-0 card-title">Blogs in {{ $tag->name }}</h4>
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
</main>