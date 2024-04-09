<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="active active-menu">
                <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                        class="ripple rippleEffect"></span><i class="las la-bars iq-arrow-left"></i><span>Main
                        Menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                    <li class="active"><a href="/"><i class="las la-house-damage"></i>Home</a></li>
                    <li class="active"><a href="{{ route('products.all') }}"><i class="ri-list-check"></i>All
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
                </ul>
            </li>
            <li class="active-menu">
                <a href="#categories" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i class="las la-th-list"></i><span>Categories</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="categories" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    @if ($tags->count() > 0)
                        @if ($categories->count() > 0)
                            @foreach ($categories as $item)
                                <li><a href="{{ route('category', ['slug' => $item->slug]) }}"><i
                                            class="fa fa-chevron-right"
                                            style="font-family: sans-serif;font-size:9px"></i>{{ $item->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    @endif
                </ul>
            </li>
            <li class="active-menu">
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
            <li class="active-menu">
                <a href="{{route('contact')}}" class="iq-waves-effect"><span
                        class="ripple rippleEffect"></span><i class="fa fa-send"></i><span>Contact us</span></a>
            </li>
            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->utype === 'slr')
                        <li class="active active-menu">
                            <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                                    class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Expert
                                    Mode</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
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
                        <li class="active active-menu">
                            <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                                    class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin
                                    Mode</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
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
                                <li><a href="{{ route('admin.content') }}"><i class="ri-book-2-line"></i>Blogs</a>
                                </li>
                                <li><a href="">Update Page Sections</a></li>
                                <li><a href="{{ route('users') }}"><i class="las la-th-list"></i>Users</a></li>
                            </ul>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
</div>
