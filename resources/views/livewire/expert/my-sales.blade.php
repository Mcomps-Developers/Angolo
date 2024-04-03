<main>
    @section('title')
        My Sales
    @endsection
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">My Sales</h4>
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
                                                    <th scope="col">Client</th>
                                                    <th scope="col">Content</th>
                                                    <th scope="col">Invoice</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Charges</th>
                                                    <th scope="col">Net Income</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($transactions as $item)
                                                    <tr>
                                                        <td>{{ $item->customer->name }}</td>
                                                        <td>{{ $item->content->title }}</td>
                                                        <td>{{ $item->reference }}</td>
                                                        <td>Ksh {{ $item->amount }}</td>
                                                        <td>Ksh {{ $item->amount * 0.3 }}</td>
                                                        <td>Ksh {{ $item->amount * 0.7 }}</td>
                                                        <td>
                                                            <div class="badge badge-pill badge-success">Paid</div>
                                                        </td>
                                                        <td>--</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 row justify-content-between">
                                        <div id="user-list-page-info" class="col-md-6">
                                            <span><a href="http://mcomps.co.ke" target="_blank"
                                                    rel="noopener noreferrer">Mcomps Tables</a></span>
                                        </div>
                                        <div class="col-md-6">
                                            <nav aria-label="Page navigation example">
                                                <div>{{ $transactions->links('pagination::bootstrap-4') }}</div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</main>
