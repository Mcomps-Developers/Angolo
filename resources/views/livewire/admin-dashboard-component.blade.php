<main>
    @section('title')
        Admin Dashboard
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
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i>
                                    </div>
                                    <div class="ml-3 text-left">
                                        <h2 class="mb-0"><span class="counter">{{ $users }}</span></h2>
                                        <h5 class="">Users</h5>
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
                                        <h5 class="">Content</h5>
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
                                        <h2 class="mb-0"><span class="counter">
                                                @if ($earnings > 999999)
                                                    {{ $earnings / 1000000 }}
                                            </span>M
                                        @elseif ($earnings > 999)
                                            {{ $earnings / 1000 }}
                                            </span>K
                                        @else
                                            {{ $earnings }}
                                            @endif

                                        </h2>
                                        <h5 class="">Sales (Ksh)</h5>
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
                                    <h4 class="card-title">Recent 10 purchases</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                            data-toggle="dropdown">
                                            <i class="ri-more-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item" href="#!" title="Request we add the feature"><i
                                                    class="mr-2 ri-eye-fill"></i>All</a>
                                            <a class="dropdown-item" href="#!" title="Request we add the feature"><i
                                                    class="mr-2 ri-printer-fill"></i>Print</a>
                                            <a class="dropdown-item" href="#!" title="Request we add the feature"><i
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
                                                <th scope="col">Client</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Ref#</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($recentPurchases as $item)
                                                <tr>
                                                    <td>{{ $item->customer->name }}</td>
                                                    <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@script
    <script>
        @if ($dailyPurchases->isNotEmpty())
            var purchases = [];
            var data = [];

            @foreach ($dailyPurchases as $purchase)
                purchases.push('{{ $purchase->created_at->format('D') }}');
                data.push('{{ $purchase->amount }}');
            @endforeach

            var options = {
                series: [{
                    name: 'Total Sales',
                    data: data
                }],
                chart: {
                    type: 'bar'
                },
                colors: ['#0dd6b8'],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '45%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: purchases
                },
                yaxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        offsetX: -20,
                        offsetY: 0
                    },
                },
                grid: {
                    padding: {
                        left: -5,
                        right: 0
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#dailySalesReport"), options);
            chart.render();
        @endif
    </script>
@endscript
