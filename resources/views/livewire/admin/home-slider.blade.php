<main>
    @section('title')
        Home Sliders
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
                                    <h4 class="card-title">Sliders</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="{{ route('slider.add') }}" class="btn btn-primary">Add New Slider</a>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <table class="table data-tables table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Display Duration</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sliders as $item)
                                                <tr>
                                                    <td><img src="{{ asset('images/sliders') }}/{{ $item->image }}"
                                                            alt="" height="30px" width="90px"
                                                            srcset="{{ asset('images/sliders') }}/{{ $item->image }}">
                                                    </td>
                                                    <td><a href="{{ $item->link }}"
                                                            target="_/blank">{{ $item->title }}</a></td>
                                                    <td> <strong>From: </strong>{{ date('M d Y h:iA', strtotime($item->from)) }} <strong> To </strong>{{ date('M d Y h:iA', strtotime($item->to)) }}
                                                    </td>
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
                                                                wire:confirm='Are you sure you want to delete this slider permanently?'
                                                                wire:click.prevent='deleteSlider({{ $item->id }})'><i
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
                                            <div>{{ $sliders->links('pagination::bootstrap-4') }}</div>
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
