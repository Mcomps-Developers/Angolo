<div>
    @section('title')
        Our Content
    @endsection
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
                                    <h4 class="card-title">Our Content</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="{{ route('content.add') }}" class="btn btn-primary">Add New Content</a>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <table class="table data-tables table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Publisher</th>
                                                <th>Description</th>
                                                <th>Regular Price</th>
                                                <th>Attachment</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contents as $item)
                                                <tr>
                                                    <td><img class="rounded img-fluid"
                                                            src="{{ asset('images/thumbnails') }}/{{ $item->thumbnail }}"
                                                            alt="" height="60px" width="40px"></td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>{{ $item->publisher->name }}</td>
                                                    <td>
                                                        <style>
                                                          .ellipsis {
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            white-space: nowrap;
                                                            max-width: 75ch; /* Adjust this value according to your layout */
                                                          }
                                                        </style>
                                                        <p class="mb-0">
                                                          <span class="ellipsis">{!! $item->description !!}</span>
                                                        </p>
                                                      </td>
                                                    <td>Ksh {{ $item->regular_price }}</td>
                                                    <td><a
                                                            href="{{ asset('files/attachments') }}/{{ $item->attachment }}"><i
                                                                class="ri-file-fill text-secondary font-size-18"></i></a>
                                                    </td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="bg-primary" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Edit"
                                                                href="{{ route('content.edit', ['item_id' => $item->id]) }}"><i
                                                                    class="ri-pencil-line"></i></a>
                                                            <a class="bg-danger" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Delete" href="#!"
                                                                wire:confirm='Are you sure you want to delet this content? It will be deleted permanently.'
                                                                wire:click.prevent='deleteContent({{ $item->id }})'><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                {{ $contents->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
