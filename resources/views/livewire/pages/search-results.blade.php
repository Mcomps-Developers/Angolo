<div id="content-page" class="content-page">
    @section('title')
        Search {{ $value }}
    @endsection
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if ($products->count() > 0)
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <div class="row">
                                @foreach ($products as $item)
                                    <div class="col-sm-6 col-md-4 col-lg-4">
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
                                                                {{ $item->publisher->name }}|<strong>{{ $item->tag->name }}</strong>
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
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                @else
                    <div style="text-align: center; margin-top:30px">
                        <h3 class="text-danger">Not found</h3>
                        <p>We could not find a related product in our database</p>
                        <div><a class="btn btn-success" href="{{ route('products.all') }}">All Products</a></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
