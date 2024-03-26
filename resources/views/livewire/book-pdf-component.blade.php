<main>
    @section('title')
        {{ $purchase->content->title }}
    @endsection
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card book-detail">
                            <div class="p-0 iq-card-header"></div>
                            <div class="p-0 iq-card-body">

                                <iframe src="{{ asset('files/attachments') }}/{{ $purchase->content->attachment }}"
                                    style="width: 100%; height: 100vh;"></iframe>

                            </div>
                            <div class="iq-card-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
