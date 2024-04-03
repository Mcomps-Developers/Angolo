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
                            <h4 class="mb-0 card-title">{{ $content->title }}</h4>
                        </div>
                        <div class="pb-0 iq-card-body">
                            <div class="description-contens align-items-top row">
                                <div class="col-md-6" wire:ignore>
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
                                                        @foreach (explode(',', $content->cover_images) as $filename)
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/coverImages/' . $filename) }}"
                                                                        class="rounded img-fluid w-100" alt="">
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-9">
                                                    <ul id="description-slider"
                                                        class="p-0 m-0 list-inline d-flex align-items-center">
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ asset('images/thumbnails') }}/{{ $content->thumbnail }}"
                                                                    class="rounded img-fluid w-100" alt="">
                                                            </a>
                                                        </li>
                                                        @foreach (explode(',', $content->cover_images) as $filename)
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/coverImages/' . $filename) }}"
                                                                        class="rounded img-fluid w-100" alt="">
                                                                </a>
                                                            </li>
                                                        @endforeach
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
                                                    class="text-body">{{ $content->publisher->name }}</span>
                                                <hr>
                                                <p class="text-body"><strong>Choose payment mode to buy content</strong>
                                                </p>
                                            </div>
                                            <div class="mb-4 d-flex align-items-center">
                                                @if (Route::has('login'))
                                                    @auth
                                                        @if ($content->on_sale)
                                                            <a href="#!" class="mr-2 btn btn-info view-more"
                                                                wire:click.prevent='payWithWallet({{ $content->discount_price }})'>
                                                            @else
                                                                <a href="#!" class="mr-2 btn btn-info view-more"
                                                                    wire:click.prevent='payWithWallet({{ $content->regular_price }})'>
                                                        @endif
                                                        <i class="ri-wallet-fill"></i> <span wire:loading.remove
                                                            wire:target='payWithWallet'> Use Wallet</span> <span
                                                            wire:loading
                                                            wire:target='payWithWallet'>Processing...</span></a>

                                                        {{-- Mpesa/Card --}}

                                                        @if ($content->on_sale)
                                                            <button type="submit"
                                                                class="mr-2 btn btn-primary view-more intaSendPayButton"
                                                                data-amount="{{ $content->discount_price }}"
                                                                data-currency="KES" data-email="{{ Auth::user()->email }}"
                                                                data-first_name="{{ Auth::user()->name }}"
                                                                data-last_name="NA"
                                                                data-phone_number="{{ Auth::user()->phone_number }}"
                                                                data-api_ref="{{ $content->reference }}"
                                                                data-country="KE"><i class="ri-mobile-phone"></i>
                                                                Global Pay</button>
                                                        @else
                                                            <button type="submit"
                                                                class="mr-2 btn btn-primary view-more intaSendPayButton"
                                                                data-amount="{{ $content->regular_price }}"
                                                                data-currency="KES" data-email="{{ Auth::user()->email }}"
                                                                data-first_name="{{ Auth::user()->name }}"
                                                                data-last_name="NA"
                                                                data-phone_number="{{ Auth::user()->phone_number }}"
                                                                data-api_ref="{{ $content->reference }}"
                                                                data-country="KE"><i class="ri-mobile-phone"></i>
                                                                Global Pay</button>
                                                        @endif
                                                    @else
                                                        <a href="{{ route('login', ['redirect' => Request::path()]) }}"
                                                            class="mr-2 btn btn-primary view-more">
                                                            <i class="ri-user-lock"></i> Login to buy
                                                        </a>
                                                    @endauth
                                                @endif

                                                OR &nbsp;
                                                <a href="#!" class="mr-2 btn btn-warning view-more"><i
                                                        class="ri-heart-fill"></i> Add to Wishlist</a>
                                            </div>
                                            <div class="iq-social d-flex align-items-center">
                                                <h5 class="mr-2">Share:</h5>
                                                <ul class="p-0 mb-0 list-inline d-flex align-items-center">
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}&quote=Check+out+this+amazing+content!+{{ urlencode($content->title) }}%0AVisit+link+below+for+more+details:+{{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}"
                                                            class="mr-2 avatar-40 rounded-circle bg-primary facebook"
                                                            target="_blank"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/intent/tweet?url={{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}&text=Check+out+this+amazing+content!+{{ urlencode($content->title) }}%0AVisit+link+below+for+more+details:+{{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}&hashtags=Education,OnlineLearning,SkillDevelopment,LifelongLearning"
                                                            class="mr-2 avatar-40 rounded-circle bg-primary twitter"
                                                            target="_blank"><i class="fa fa-twitter"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="whatsapp://send?text=Check+out+this+amazing+content!+{{ urlencode($content->title) }}%0AVisit+link+below+for+more+details:+{{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}"
                                                            class="mr-2 avatar-40 rounded-circle bg-success whatsapp"
                                                            target="_blank"><i class="fa fa-whatsapp"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/?url={{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}&title=Check+out+this+amazing+content!*+{{ urlencode($content->title) }}*%0AVisit+link+below+for+more+details:+{{ route('content.details', ['reference' => $content->reference, 'slug' => $content->slug]) }}"
                                                            class="avatar-40 rounded-circle bg-danger instagram"
                                                            target="_blank"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a>
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
{{-- @script --}}
<script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.4/build/intasend-inline.js"></script>
{{-- <script>
    new window.IntaSend({
        publicAPIKey: '{{ env('INTASEND_PUB_KEY') }}',
            live: true
        })
        .on("COMPLETE", (results) => {
            // console.log("Success", results);
            saveTransactionToController(results);
        })
        .on("FAILED", (results) => {
            // console.log("Failed", results);
            saveTransactionToController(results);
        })
        .on("IN-PROGRESS", (results) => console.log("Payment in progress status", results));

    function saveTransactionToController(results) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const url = 'https://angolo.mcomps.co.ke/save-transaction';
        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    results: results
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // console.log('Data: ', data);
                window.location.href = 'https://angolo.mcomps.co.ke/dashboard';
            })
            .catch(error => console.error('Error saving transaction:', error));
    }
</script> --}}
<script>
    new window.IntaSend({
            publicAPIKey: "ISPubKey_live_7f35b3a9-6644-4aab-8305-7b2947f4059a",
            live: true
        })
        .on("COMPLETE", (results) => {
            // console.log("Success", results);
            saveTransactionToController(results);
        })
        .on("FAILED", (results) => {
            // console.log("Failed", results);
            saveTransactionToController(results);
        })
        .on("IN-PROGRESS", (results) => console.log("Payment in progress status", results));

    function saveTransactionToController(results) {
        console.log('Results:', results); // Log the results

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const url = 'https://angolo.mcomps.co.ke/save-transaction';

        console.log('Sending request to:', url); // Log the URL being requested

        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    results: results
                })
            })
            .then(response => {
                console.log('Response received:', response); // Log the response received

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Check if the response body is empty
                if (response.headers.get('Content-Length') === '0') {
                    // Response body is empty, return an empty object
                    return {};
                }
                // Log the response body
                return response.text().then(text => {
                    console.log('Response body:', text);
                    return text ? JSON.parse(text) : {};
                });
            })
            .then(data => {
                console.log('Response data:', data); // Log the response data

                // Reload the current page
                window.location.reload();
            })
            .catch(error => console.error('Error saving transaction:', error));

    }
</script>

{{-- @endscript --}}
