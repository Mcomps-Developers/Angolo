<main>
    @section('title')
        Expert Dashboard
    @endsection
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-wallet-line"></i>
                                    </div>
                                    <div class="ml-3 text-left">
                                        <h2 class="mb-0">
                                            @if ($wallet->balance > 999999)
                                                {{ $wallet->balance / 1000000 }}
                                                </span>M
                                            @elseif ($wallet->balance > 999)
                                                {{ $wallet->balance / 1000 }}
                                                </span>K
                                            @else
                                                {{ $wallet->balance }}
                                            @endif
                                        </h2>
                                        <h5 class="">Wallet Bal (Ksh)</h5>
                                        <small style="margin-right: 15px;"><a href="#!" class="btn btn-success btn-sm"> Top up</a></small><small><a href="#!" class="btn btn-warning btn-sm"> Withdraw</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i>
                                    </div>
                                    <div class="ml-3 text-left">
                                        <h2 class="mb-0"><span class="counter">
                                                @if ($content > 999999)
                                                    {{ $content / 1000000 }}
                                            </span>M
                                        @elseif ($content > 999)
                                            {{ $content / 1000 }}
                                            </span>K
                                        @else
                                            {{ $content }}
                                            @endif
                                        </h2>
                                        <h5 class="">Content Posted</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-warning"><i
                                            class="ri-shopping-cart-2-line"></i></div>
                                    <div class="ml-3 text-left">
                                        <h2 class="mb-0">
                                            <span class="counter">
                                                <h2 class="mb-0">
                                                    <span class="counter">
                                                        @php
                                                            $totalAmount = $earnings->sum('amount');
                                                            $earningsAfterMultiplier = $totalAmount * 0.7;

                                                            if ($earningsAfterMultiplier > 999999) {
                                                                echo round($earningsAfterMultiplier / 1000000, 2) . 'M'; // rounding to 2 decimal places
                                                            } elseif ($earningsAfterMultiplier > 999) {
                                                                echo round($earningsAfterMultiplier / 1000, 2) . 'K'; // rounding to 2 decimal places
                                                            } else {
                                                                echo $earningsAfterMultiplier;
                                                            }
                                                        @endphp
                                                    </span>
                                                </h2>
                                            </span>
                                        </h2>
                                        <h5 class="">Earnings (Ksh)</h5>
                                        <small>This month Only</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i></div>
                                    <div class="ml-3 text-left">
                                        <h2 class="mb-0"><span class="counter">
                                                @if ($purchases > 999999)
                                                    {{ $purchases / 1000000 }}
                                            </span>M
                                        @elseif ($purchases > 999)
                                            {{ $purchases / 1000 }}
                                            </span>K
                                        @else
                                            {{ $purchases }}
                                            @endif

                                        </h2>
                                        <h5 class="">Purchases</h5>
                                        <small>Successful this month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">My Purchases</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                            data-toggle="dropdown">
                                            <i class="ri-more-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton5">
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
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Ref#</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($myPurchases as $item)
                                                <tr>
                                                    <td>{{ date('d/m/Y h:iA', strtotime($item->created_at)) }}</td>
                                                    <td style="text-transform:uppercase;">{{ $item->reference }}</td>
                                                    <td><a href="{{ route('content.details', ['reference' => $item->content->reference, 'slug' => $item->content->slug]) }}"
                                                            target="_/blank">{{ $item->content->title }}</a></td>
                                                    <td>Ksh {{ $item->amount }}</td>
                                                    <td>
                                                        @if ($item->status == 'cancelled')
                                                            <div class="badge badge-pill badge-danger">Cancelled</div>
                                                        @elseif ($item->status === 'pending')
                                                            <div class="badge badge-pill badge-info">Pending</div>
                                                        @else
                                                            <div class="badge badge-pill badge-success">Paid</div>
                                                        @endif
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{ $myPurchases->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
