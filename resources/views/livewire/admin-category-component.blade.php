<main>
    @section('title')
        Our Categories
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
                                    <h4 class="card-title">Categories</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="{{ route('category.add') }}" class="btn btn-primary">Add New Category</a>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <table class="table data-tables table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="5%">Icon</th>
                                                <th width="25%">Category Name</th>
                                                <th width="55%">Category Description</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $item)
                                                <tr>
                                                    <td>1</td>
                                                    <td><img src="{{ asset('images/categories') }}/{{ $item->icon }}"
                                                            alt="" height="30px" width="30px"
                                                            srcset="{{ asset('images/categories') }}/{{ $item->icon }}">
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <p class="mb-0">{{ $item->description }}</p>
                                                    </td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="bg-primary" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Edit" href="#!"><i
                                                                    class="ri-pencil-line"></i></a>
                                                            <a class="bg-danger" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Delete" href="#!"
                                                                wire:confirm='Are you sure you want to delete this category permanently?'
                                                                wire:click.prevent='deleteCategory({{ $item->id }})'><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $categories->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
