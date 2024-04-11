<main>
    @section('title')
        {{ $categoryName }} Products
    @endsection
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-0 iq-card-transparent">
                            <div class="text-center d-block">
                                <h2 class="mb-3"> {{ $categoryName }}</h2>
                                {{-- <div class="w-100 iq-search-filter">
                                    <ul class="p-0 m-0 list-inline row justify-content-center search-menu-options">
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="mb-0 form-group">
                                                    <select class="bg-white border-0 form-control form-search-control"
                                                        id="exampleFormControlSelect1">
                                                        <option selected="">All</option>
                                                        @foreach ($tags as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="mb-0 form-group">
                                                    <select class="bg-white border-0 form-control form-search-control"
                                                        id="exampleFormControlSelect2">
                                                        <option selected="">Categories</option>
                                                        <option>General</option>
                                                        <option>History</option>
                                                        <option>Horror</option>
                                                        <option>Fantasy</option>
                                                        <option>Literary</option>
                                                        <option>Manga</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="mb-0 form-group">
                                                    <select class="bg-white border-0 form-control form-search-control"
                                                        id="exampleFormControlSelect3">
                                                        <option selected="">Year</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="mb-0 form-group">
                                                    <select class="bg-white border-0 form-control form-search-control"
                                                        id="exampleFormControlSelect4">
                                                        <option selected="">Author</option>
                                                        <option>Milesiy Yor</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-search-bar search-book d-flex align-items-center">
                                                <form action="#" class="searchbox">
                                                    <input type="text" class="text search-input"
                                                        placeholder="search here...">
                                                    <a class="search-link" href="#"><i
                                                            class="ri-search-line"></i></a>
                                                </form>
                                                <button type="submit"
                                                    class="ml-2 btn btn-primary search-data">Search</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
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
                                                                    {{ $item->publisher->name }} | <strong>{{ $item->tag->name }}</strong>
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
                                    <h4 class="mb-0 card-title">Blogs in {{ $categoryName }}</h4>
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
                </div>
            </div>
        </div>
    </div>
</main>
