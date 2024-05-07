<main>
    @section('title')
        Content Tags
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
                                    <h4 class="card-title">Tags</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="{{ route('tag.add') }}" class="btn btn-primary">Add New Tag</a>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <table class="table data-tables table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Tag Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tags as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="bg-primary" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Edit" href="{{ route('tag.edit',['tag_id'=>$item->id]) }}"><i
                                                                    class="ri-pencil-line"></i></a>
                                                            <a class="bg-danger" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Delete" href="#!"
                                                                wire:confirm='Are you sure you want to delete this tag permanently?'
                                                                wire:click.prevent='deleteTag({{ $item->id }})'><i
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
                                        <span><a href="http://mcomps.co.ke" target="_blank"
                                                rel="noopener noreferrer">Mcomps Tables</a></span>
                                    </div>
                                    <div class="col-md-6">
                                        <nav aria-label="Page navigation example">
                                            <div>{{ $tags->links('pagination::bootstrap-4') }}</div>
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
</main>
