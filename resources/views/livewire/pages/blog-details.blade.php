<div id="content-page" class="content-page">
    @section('title')
        {{ $blog->title }}
    @endsection
    @section('meta-description')
        {{ $blog->content }}
    @endsection
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="pb-0 iq-card-body">
                        <div class="mb-3">
                            <!-- Featured Image -->
                            <img src="{{ asset('images/blogs/thumbnails') }}/{{ $blog->thumbnail }}"
                                class="mb-3 img-fluid" alt="Featured Image">
                        </div>
                        <h3 class="mb-3 card-title">{{ $blog->title }}</h3>
                        <!-- Add details below the title -->
                        <div class="blog-details">
                            <div class="mr-2 btn-group" role="group" aria-label="Blog Details">
                                <button type="button" class="btn btn-secondary" style="margin-bottom: 5px">
                                    <i class="fa fa-calendar"></i>
                                    {{ $blog->created_at->format('F j, Y h:iA') }}
                                </button>
                            </div>
                            <?php
                            $wordCount = str_word_count(strip_tags($blog->content));
                            $readingTime = ceil($wordCount / 200); // Assuming average reading speed of 200 words per minute
                            ?>
                            <div class="mr-2 btn-group" role="group" aria-label="Blog Details">
                                <button type="button" class="btn btn-warning">
                                    <i class="fa fa-eye"></i>
                                    Read in {{ $readingTime }} Minutes
                                </button>
                            </div>
                            <div class="mr-2 btn-group" role="group" aria-label="Blog Details">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-user"></i> {{ $blog->author->name }}
                                </button>
                            </div>
                        </div>
                        <!-- Add your blog content here -->
                        {!! $blog->content !!}
                        <!-- Tags -->
                        <hr>
                        <div class="mb-3">
                            <span>Tags:</span>
                            @foreach (explode(',', $blog->tags) as $tag)
                                <span class="btn btn-secondary btn-sm"
                                    style="text-transform: capitalize; margin-bottom:5px;">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <hr>
                        <div class="iq-social d-flex align-items-center">
                            <h5 class="mr-2">Share:</h5>
                            <ul class="p-0 mb-0 list-inline d-flex align-items-center">
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                                        class="mr-2 avatar-40 rounded-circle bg-primary facebook" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text=Check%20out%20this%20awesome%20blog!"
                                        class="mr-2 avatar-40 rounded-circle bg-primary twitter" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"
                                        class="mr-2 avatar-40 rounded-circle bg-danger instagram" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?text=Check%20out%20this%20awesome%20blog:%20{{ urlencode(Request::fullUrl()) }}"
                                        class="avatar-40 rounded-circle bg-success whatsapp" target="_blank">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr class="text-primary">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Related Blogs section remains unchanged -->
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title text-secondary">Related Blogs</h5>
                    </div>
                    <div class="pb-0 iq-card-body" style="height: relative">
                        <!-- Add related blogs here -->
                        @foreach ($relatedBlogs as $item)
                            @if ($item->id != $blog->id)
                                <div class="mb-3">
                                    <a href="{{ route('blog.details', ['reference' => $item->reference, 'slug' => $item->slug]) }}"
                                        class="text-body">
                                        <h5 class="mb-2">
                                            <span class="text-secondary"><i class="fa fa-check-circle f12"></i></span>
                                            {{ strlen(strip_tags($item->title)) > 100 ? substr($item->title, 0, 10) . '...' : $item->title }}
                                        </h5>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <hr>
                        <h5 class="text-secondary">Categories</h5>
                        <hr>
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
