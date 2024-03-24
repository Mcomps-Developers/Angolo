<div>
    @section('title')
        My Users
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
                                    <h4 class="card-title">User List</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="{{ route('user.add') }}" class="btn btn-primary">Add New User</a>
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
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                                <tr>
                                                    <td class="text-center">
                                                        @if ($item->profile_phot_path)
                                                            <img class="rounded img-fluid avatar-40"
                                                            src="{{ asset('images/user') }}/{{$item->profile_photo_path}}" alt="">
                                                        @else
                                                        <img class="rounded img-fluid avatar-40"
                                                        src="{{ $item->profile_photo_url }}" alt="">
                                                        @endif
                                                        
                                                        </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone_number }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td><span class="badge iq-bg-primary">Active</span></td>
                                                    <td>{{date('d/m/Y',strtotime($item->created_at))}}</td>
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
                                        <span>Tables by Mcomps Limited</span>
                                    </div>
                                    <div class="col-md-6">
                                        <nav aria-label="Page navigation example">
                                            <div>{{ $users->links('pagination::bootstrap-4') }}</div>
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
