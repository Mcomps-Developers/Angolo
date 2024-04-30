<div id="content-page" class="content-page">
    @section('title')
        Blog
    @endsection
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @foreach ($blogs as $item)
                        <div class="col-sm-6">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-mb-3">
                                <img src="{{ asset('images/blogs/thumbnails') }}/{{ $item->thumbnail }}" height="180px"
                                    class="card-img-top" alt="#">
                                <div class="iq-card-body">
                                    <h4 class="card-title"><a
                                            href="{{ route('blog.details', ['reference' => $item->reference, 'slug' => $item->slug]) }}">{{ $item->title }} <i class="fa fa-external-link"></i></a>
                                    </h4>

                                    {{-- <div class="card-text">{!! strlen($item->content) > 80 ? substr($item->content, 0, 80) . '...' : $item->content !!}</div> --}}
                                    <a href="{{ route('blog.details', ['reference' => $item->reference, 'slug' => $item->slug]) }}"
                                        class="btn btn-primary btn-block">Read Now</a>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text"><small
                                            class="text-muted">{{ $item->created_at->format('F j, Y') }}</small> |
                                        <small>{{ $item->views }} views</small> | <small><i class="fa fa-user"></i>
                                            {{ $item->author->name }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $blogs->links('pagination::bootstrap-5') }}
            </div>
            <div class="col-md-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title text-secondary">Categories</h5>
                    </div>
                    <div class="pb-0 iq-card-body" style="height: relative">
                        @foreach ($categories as $item)
                            <div class="mb-3">
                                <a href="{{ route('blogs.per.category', ['slug' => $item->slug]) }}" class="text-body">
                                    <h5 class="mb-2"><span class="text-primary"><i
                                                class="fa fa-check-circle f12"></i></span> {{ $item->name }}
                                        ({{ $item->blogs->count() }})
                                    </h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Custom CSS for Blog Details Page */

        /* Featured Image */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        /* Author Section */
        .media-body h5 {
            font-size: 18px;
        }

        .media-body p {
            color: #666;
        }

        /* Blog details styling */
        .blog-details {
            background-color: #f9f9f9;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .detail-label {
            font-weight: bold;
            color: #333;
            margin-right: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            .col-md-8,
            .col-md-4 {
                width: 100%;
            }
        }
    </style>
</div>
