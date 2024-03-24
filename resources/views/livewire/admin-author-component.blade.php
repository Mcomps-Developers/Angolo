<div>
    @section('title')
        Experts
    @endsection
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Experts</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="{{ route('expert.add') }}" class="btn btn-primary">Add New Expert</a>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-12 col-md-6">
                                            <div id="user_list_datatable_info" class="dataTables_filter">
                                                <form class="mr-3 position-relative">
                                                    <div class="mb-0 form-group">
                                                        <input type="search" class="form-control"
                                                            id="exampleInputSearch" placeholder="Search"
                                                            aria-controls="user-list-table">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="float-right user-list-files d-flex">
                                                <a class="iq-bg-primary" href="javascript:void();">
                                                    Print
                                                </a>
                                                <a class="iq-bg-primary" href="javascript:void();">
                                                    Excel
                                                </a>
                                                <a class="iq-bg-primary" href="javascript:void();">
                                                    Pdf
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="user-list-table" class="table mt-4 table-striped table-bordered"
                                        role="grid" aria-describedby="user-list-page-info">
                                        <thead>
                                            <tr>
                                                <th>Profile</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Category</th>
                                                <th>Category</th>
                                                <th>Company</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($experts as $item)
                                                <tr>
                                                    <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                            src="{{ asset('images/user/01.jpg') }}" alt="profile"></td>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->user->phone_number }}</td>
                                                    <td>{{ $item->user->email }}</td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>
                                                        @if ($item->status)
                                                            <span class="badge iq-bg-primary">Active</span>
                                                        @else
                                                            <span class="badge iq-bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="iq-bg-primary" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Edit" href="#"><i
                                                                    class="ri-pencil-line"></i></a>
                                                            <a class="iq-bg-danger" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Delete" href="#"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 row justify-content-between">
                                    <div id="user-list-page-info" class="col-md-6">
                                        <span>{{ $experts->links('pagination::bootstrap-5') }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <nav aria-label="Page navigation example">
                                            <ul class="mb-0 pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"
                                                        aria-disabled="true">Previous</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
