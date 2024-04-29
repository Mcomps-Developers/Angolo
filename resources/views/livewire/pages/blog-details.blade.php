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
                            <img src="{{ asset('images/blogs/featured_images') }}/{{ $blog->featured_image }}"
                                class="mb-3 img-fluid" alt="Featured Image">
                        </div>
                        <h2 class="mb-3 card-title">{{ $blog->title }}</h2>
                        <!-- Add details below the title -->
                        <div class="blog-details">
                            <div class="mr-2 btn-group" role="group" aria-label="Blog Details">
                                <button type="button" class="btn btn-secondary" style="margin-bottom: 5px">
                                    <i class="fa fa-calendar-alt"></i> Posted
                                    {{ $blog->created_at->format('F j, Y h:iA') }}
                                </button>
                            </div>
                            <?php
                            $wordCount = str_word_count(strip_tags($blog->content));
                            $readingTime = ceil($wordCount / 200); // Assuming average reading speed of 200 words per minute
                            ?>
                            <div class="mr-2 btn-group" role="group" aria-label="Blog Details">
                                <button type="button" class="btn btn-warning">
                                    <i class="fa fa-watch"></i>Read in {{ $readingTime }} Minutes
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
                            <span class="btn btn-primary btn-sm">{{ $blog->tag->name }}</span>
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
                        <!-- Author Section -->
                        <div class="mb-3 media align-items-center">
                            <br>
                            <img src="{{ $blog->author->profile_photo_url }}" class="mr-3 rounded-circle"
                                alt="Author Photo" width="64">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">{{ $blog->author->name }}</h5>
                                <p class="mb-1">Thank you for reading my blog. I'm a seasoned blog writer and academic
                                    content creator for all levels.</p>
                                <p class="mb-0">Follow me on:
                                    <a href="{{ $blog->author->facebook_url }}" class="mr-1"
                                        target="_blank">Facebook</a>
                                    <a href="{{ $blog->author->twitter_url }}" class="mr-1"
                                        target="_blank">Twitter</a>
                                    <a href="{{ $blog->author->instagram_url }}" class="mr-1"
                                        target="_blank">Instagram</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Related Blogs section remains unchanged -->
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 card-title">Related Blogs</h4>
                    </div>
                    <div class="pb-0 iq-card-body" style="height: relative">
                        <!-- Add related blogs here -->
                        @foreach ($relatedBlogs as $item)
                            <div class="mb-3">
                                <a href="#" class="text-body">
                                    <h5 class="mb-2">{{ $item->title }}</h5>
                                </a>
                                <p class="text-muted">{!! strlen(strip_tags($item->content)) > 100 ? substr($item->content, 0, 10) . '...' : $item->content !!}</p>
                            </div>
                        @endforeach
                        <!-- Add more related blogs as needed -->
                        <!-- Advertisement Section -->
                        <div class="advertisement">

                            <div class="ad-content">
                                <h5>Advertisement</h5>
                                <div class="close-advertisement">&times;</div>
                                <img src="https://placehold.co/600x400/EEE/31343C" alt="Advertisement Image"
                                    class="img-fluid">
                                <p>This is a sample advertisement. You can place your advertisement here.</p>
                            </div>
                        </div>
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
