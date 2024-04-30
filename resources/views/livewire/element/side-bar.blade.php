<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class=""><a href="/"><i class="las la-home"></i>Home</a></li>
            <li class=""><a href="{{ route('about.us') }}"><i class="las la-location-arrow"></i>About us</a></li>
            <li class=""><a href="{{ route('products.all') }}"><i class="las la-search"></i>Search
                    Products</a></li>
            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->utype === 'byr')
                        <li><a href="{{ route('user.purchases') }}"><i class="ri-function-line"></i>My
                                Dashboard</a>
                        </li>
                    @endif
                @endauth
            @endif
            <li class="">
                <a href="#categories" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i class="las la-th-list"></i><span>Categories</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="categories" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                        @if ($categories->count() > 0)
                            @foreach ($categories as $item)
                                <li><a href="{{ route('category', ['slug' => $item->slug]) }}"><i
                                            class="fa fa-chevron-right"
                                            style="font-family: sans-serif;font-size:9px"></i>{{ $item->name }}</a>
                                </li>
                            @endforeach
                        @endif
            
                </ul>
            </li>
            <li class="">
                <a href="#tags" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i class="ri-list-check"></i><span>Tags</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="tags" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    @if ($tags->count() > 0)
                        @foreach ($tags as $item)
                            <li><a href="{{ route('tag.content', ['name' => $item->name]) }}"><i
                                        class="fa fa-chevron-right"
                                        style="font-family: sans-serif;font-size:9px"></i>{{ $item->name }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li class="">
                <a href="{{ route('display.blogs') }}" class="iq-waves-effect"><span
                        class="ripple rippleEffect"></span><i class="ri-book-open-line"></i><span>Blogs</span></a>
            </li>
            <li class="">
                <a href="{{ route('contact') }}" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i
                        class="fa fa-send"></i><span>Contact us</span></a>
            </li>
            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->utype === 'slr')
                        <li class="">
                            <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                                    class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Expert
                                    Mode</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="{{ route('expert.dashboard') }}"><i class="ri-dashboard-line"></i>Dashboard</a>
                                </li>
                                <li><a href="{{ route('expert.content') }}"><i class="ri-book-2-line"></i>My
                                        Content</a>
                                </li>
                                <li><a href="{{ route('expert.sales') }}"><i class="las la-wallet"></i>My Sales</a></li>
                                <li><a href="{{ route('user.profile') }}"><i class="ri-admin-line"></i>My Profile</a>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::user()->utype === 'adm')
                        <li class="">
                            <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                                    class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin
                                    Mode</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="{{ route('admin.dashboard') }}"><i class="ri-dashboard-line"></i>Dashboard</a>
                                </li>
                                <li><a href="{{ route('admin.categories') }}"><i class="ri-list-check-2"></i>Categories</a>
                                </li>
                                <li><a href="{{ route('admin.tags') }}"><i class="ri-list-check"></i>Tags</a>
                                </li>
                                <li><a href="{{ route('admin.experts') }}"><i class="ri-file-user-line"></i>Experts</a>
                                </li>
                                <li><a href="{{ route('admin.content') }}"><i class="ri-book-2-line"></i>Content</a>
                                <li><a href="{{ route('sliders') }}"><i class="fa fa-photo"></i>Sliders</a>
                                </li>
                            </ul>
                        <li class="">
                            <a href="#more" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                                    class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin
                                    Blog</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="more" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="{{ route('admin.blogs') }}"><i class="ri-book-2-line"></i>All Blogs</a>
                                <li><a href="{{ route('blog.categories') }}"><i class="ri-list-check-2"></i>Categories</a>
                                <li><a href="{{ route('blog.tags') }}"><i class="ri-list-check-2"></i>Tags</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('pages.content') }}"><i class="ri-book-2-line"></i> Update Page
                                Sections</a></li>
                        <li><a href="{{ route('users') }}"><i class="las la-th-list"></i>Users</a></li>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
</div>
