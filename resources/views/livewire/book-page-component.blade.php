<main>
    @section('title')
        {{ $content->title }}
    @endsection
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 card-title">Deatiled View</h4>
                        </div>
                        <div class="pb-0 iq-card-body">
                            <div class="description-contens align-items-top row">
                                <div class="col-md-6">
                                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                        <div class="p-0 iq-card-body">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <ul id="description-slider-nav"
                                                        class="p-0 m-0 list-inline d-flex align-items-center">
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ asset('images/thumbnails') }}/{{ $content->thumbnail }}"
                                                                    class="rounded img-fluid w-100" alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ asset('images/book-dec/02.jpg') }}"
                                                                    class="rounded img-fluid w-100" alt="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-9">
                                                    <ul id="description-slider"
                                                        class="p-0 m-0 list-inline d-flex align-items-center">
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ asset('images/book-dec/01.jpg') }}"
                                                                    class="rounded img-fluid w-100" alt="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                        <div class="p-0 iq-card-body">
                                            <h3 class="mb-3">{{ $content->title }}</h3>
                                            <div class="mb-2 price d-flex align-items-center font-weight-500">
                                                @if ($content->on_sale)
                                                    <span class="pr-2 font-size-20 old-price">Ksh
                                                        {{ $content->regular_price }}</span>
                                                    <span class="font-size-24 text-dark">Ksh
                                                        {{ $content->discount_price }}</span>
                                                @else
                                                    <span class="font-size-24 text-dark">Ksh
                                                        {{ $content->regular_price }}</span>
                                                @endif

                                            </div>
                                            <div class="mb-3 d-block">
                                                <span class="font-size-20 text-warning">
                                                    <i class="mr-1 fa fa-star"></i>
                                                    <i class="mr-1 fa fa-star"></i>
                                                    <i class="mr-1 fa fa-star"></i>
                                                    <i class="mr-1 fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <span
                                                class="pb-4 mb-4 text-dark iq-border-bottom d-block">{!! $content->description !!}</span>
                                            <div class="mb-4 text-primary">Published by <span
                                                    class="text-body">{{ $content->publisher->name }}</span></div>
                                            <div class="mb-4 d-flex align-items-center">
                                                <a href="#" class="mr-2 btn btn-primary view-more">Add To Cart</a>
                                                <a href="#!" class="mr-2 btn btn-primary view-more">Read
                                                    Sample</a>
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" class="text-center text-body"><span
                                                        class="mr-2 avatar-30 rounded-circle bg-primary d-inline-block"><i
                                                            class="ri-heart-fill"></i></span><span>Add to
                                                        Wishlist</span></a>
                                            </div>
                                            <div class="iq-social d-flex align-items-center">
                                                <h5 class="mr-2">Share:</h5>
                                                <ul class="p-0 mb-0 list-inline d-flex align-items-center">
                                                    <li>
                                                        <a href="#"
                                                            class="mr-2 avatar-40 rounded-circle bg-primary facebook"><i
                                                                class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="mr-2 avatar-40 rounded-circle bg-primary twitter"><i
                                                                class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="mr-2 avatar-40 rounded-circle bg-primary youtube"><i
                                                                class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                                class="fa fa-pinterest-p" aria-hidden="true"></i></a>
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
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="mb-0 iq-card-header d-flex justify-content-between align-items-center position-relative trendy-detail">
                            <div class="iq-header-title">
                                <h4 class="mb-0 card-title">Related Products</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="{{ route('category', ['slug' => $content->category->slug]) }}"
                                    class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body trendy-contens">
                            <ul id="trendy-slider" class="p-0 mb-0 list-inline row">
                                @foreach ($rProducts as $item)
                                    @if ($item->id != $content->id)
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
                                                            class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">{{ $item->title }}</h6>
                                                        <p class="mb-1 font-size-13 line-height">
                                                            {{ $item->publisher->name }}</p>
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
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
