<main>
    <div id="loading">
        <div id="loading-center">
        </div>
     </div>
     <!-- loader END -->
     <!-- Wrapper Start -->
     <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
           <div class="iq-sidebar-logo d-flex justify-content-between">
              <a href="/" class="header-logo">
                 <img src="{{asset('images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                 <div class="logo-title">
                    <span class="text-primary text-uppercase">Booksto</span>
                 </div>
              </a>
              <div class="iq-menu-bt-sidebar">
                 <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                       <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                 </div>
              </div>
           </div>
           <div id="sidebar-scrollbar">
              <nav class="iq-sidebar-menu">
                 <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active active-menu">
                       <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                          <li><a href="/"><i class="las la-house-damage"></i>Home Page</a></li>
                          <li class="active"><a href="/category"><i class="ri-function-line"></i>Category Page</a></li>
                          <li><a href="/book-page"><i class="ri-book-line"></i>Book Page</a></li>
                          <li><a href="/book-pdf"><i class="ri-file-pdf-line"></i>Book PDF</a></li>
                          <li><a href="/checkout"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                         <li><a href="/wishlist"><i class="ri-heart-line"></i>wishlist</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="admin-dashboard.html"><i class="ri-dashboard-line"></i>Dashboard</a></li>
                          <li><a href="admin-category.html"><i class="ri-list-check-2"></i>Category Lists</a></li>
                          <li><a href="admin-author.html"><i class="ri-file-user-line"></i>Author</a></li>
                          <li><a href="admin-books.html"><i class="ri-book-2-line"></i>Books</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                          <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li>
                          <li><a href="profile-edit.html"><i class="las la-edit"></i>User Edit</a></li>
                          <li><a href="add-user.html"><i class="las la-plus-circle"></i>User Add</a></li>
                          <li><a href="user-list.html"><i class="las la-th-list"></i>User List</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li class="elements">
                             <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                                <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                                <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                                <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                                <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                                <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                                <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                                <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                                <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                                <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                                <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                                <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                                <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                                <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                                <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>
                                <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                                <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                                <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                                <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                                <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                             </ul>
                          </li>
                          <li class="form">
                             <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                                <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                                <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                                <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                                <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                             </ul>
                          </li>
                          <li>
                             <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                                <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                                <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                             </ul>
                          </li>
                          <li>
                             <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                                <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                                <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                             </ul>
                          </li>
                          <li>
                             <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                                <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                                <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                                <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                             </ul>
                          </li>
                          <li>
                             <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                                <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                                <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                                <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                                <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                                <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                             </ul>
                          </li>
                       </ul>
                    </li>
                    <li>
                       <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li>
                             <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                                <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                                <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                                <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                                <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                                <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                             </ul>
                          </li>
                          <li>
                             <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                                <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                                <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                                <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                                <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                                <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                                <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                                <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                                <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                                <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                             </ul>
                          </li>
                       </ul>
                    </li>
                    <li>
                       <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line iq-arrow-left"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                          <li>
                             <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                             <ul>
                                <li class="menu-level">
                                   <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                   <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse">
                                      <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                      <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                      <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                                   </ul>
                                </li>
                             </ul>
                          </li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                       </ul>
                    </li>
                 </ul>
              </nav>
              <div id="sidebar-bottom" class="p-3 position-relative">
                 <div class="iq-card">
                    <div class="iq-card-body">
                       <div class="sidebarbottom-content">
                          <div class="image"><img src="images/page-img/side-bkg.png" alt=""></div>                           
                          <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Become Membership</button>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
           <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                 <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                       <div class="main-circle"><i class="las la-bars"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between">
                       <a href="/" class="header-logo">
                          <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                          <div class="logo-title">
                             <span class="text-primary text-uppercase">Booksto</span>
                          </div>
                       </a>
                    </div>
                 </div>
                 <div class="navbar-breadcrumb">
                    <h5 class="mb-0">Category Page</h5>
                    <nav aria-label="breadcrumb">
                       <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Category Page</li>
                       </ul>
                    </nav>
                 </div>
                 <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                       <input type="text" class="text search-input" placeholder="Search Here...">
                       <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </form>
                 </div>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                 <i class="ri-menu-3-line"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                       <li class="nav-item nav-icon search-content">
                          <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                             <i class="ri-search-line"></i>
                          </a>
                          <form action="#" class="search-box p-0">
                             <input type="text" class="text search-input" placeholder="Type here to search...">
                             <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                          </form>
                       </li>
                       <li class="nav-item nav-icon">
                          <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                          <i class="ri-notification-2-line"></i>
                          <span class="bg-primary dots"></span>
                          </a>
                          <div class="iq-sub-dropdown">
                             <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0">
                                   <div class="bg-primary p-3">
                                      <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                   </div>
                                   <a href="#" class="iq-sub-card" >
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Emma Watson Barry</h6>
                                            <small class="float-right font-size-12">Just Now</small>
                                            <p class="mb-0">95 MB</p>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card" >
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">New customer is join</h6>
                                            <small class="float-right font-size-12">5 days ago</small>
                                            <p class="mb-0">Cyst Barry</p>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card" >
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Two customer is left</h6>
                                            <small class="float-right font-size-12">2 days ago</small>
                                            <p class="mb-0">Cyst Barry</p>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card" >
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">New Mail from Fenny</h6>
                                            <small class="float-right font-size-12">3 days ago</small>
                                            <p class="mb-0">Cyst Barry</p>
                                         </div>
                                      </div>
                                   </a>
                                </div>
                             </div>
                          </div>
                       </li>
                       <li class="nav-item nav-icon dropdown">
                          <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                          <i class="ri-mail-line"></i>
                          <span class="bg-primary dots"></span>
                          </a>
                          <div class="iq-sub-dropdown">
                             <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                   <div class="bg-primary p-3">
                                      <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                   </div>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Barry Emma Watson</h6>
                                            <small class="float-left font-size-12">13 Jun</small>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                            <small class="float-left font-size-12">20 Apr</small>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Why do we use it?</h6>
                                            <small class="float-left font-size-12">30 Jun</small>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Variations Passages</h6>
                                            <small class="float-left font-size-12">12 Sep</small>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                            <small class="float-left font-size-12">5 Dec</small>
                                         </div>
                                      </div>
                                   </a>
                                </div>
                             </div>
                          </div>
                       </li>
                       <li class="nav-item nav-icon dropdown">
                          <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                          <i class="ri-shopping-cart-2-line"></i>
                          <span class="badge badge-danger count-cart rounded-circle">4</span>
                          </a>
                          <div class="iq-sub-dropdown">
                             <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 toggle-cart-info">
                                   <div class="bg-primary p-3">
                                      <h5 class="mb-0 text-white">All Carts<small class="badge  badge-light float-right pt-1">4</small></h5>
                                   </div>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="rounded" src="images/cart/01.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Night People book</h6>
                                            <p class="mb-0">$32</p>
                                         </div>
                                         <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="rounded" src="images/cart/02.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">The Sin Eater Book</h6>
                                            <p class="mb-0">$40</p>
                                         </div>
                                         <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="rounded" src="images/cart/03.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">the Orange Tree</h6>
                                            <p class="mb-0">$30</p>
                                         </div>
                                         <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                      </div>
                                   </a>
                                   <a href="#" class="iq-sub-card">
                                      <div class="media align-items-center">
                                         <div class="">
                                            <img class="rounded" src="images/cart/04.jpg" alt="">
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Harsh Reality book</h6>
                                            <p class="mb-0">$25</p>
                                         </div>
                                         <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                      </div>
                                   </a>
                                   <div class="d-flex align-items-center text-center p-3">
                                      <a class="btn btn-primary mr-2 iq-sign-btn" href="#" role="button">View Cart</a>
                                      <a class="btn btn-primary iq-sign-btn" href="#" role="button">Shop now</a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </li>
                       <li class="line-height pt-3">
                          <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                             <img src="images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                             <div class="caption">
                                <h6 class="mb-1 line-height">Barry Tech</h6>
                                <p class="mb-0 text-primary">$20.32</p>
                             </div>
                          </a>
                          <div class="iq-sub-dropdown iq-user-dropdown">
                             <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                   <div class="bg-primary p-3">
                                      <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                      <span class="text-white font-size-12">Available</span>
                                   </div>
                                   <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                      <div class="media align-items-center">
                                         <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                      <div class="media align-items-center">
                                         <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-profile-line"></i>
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Edit Profile</h6>
                                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                      <div class="media align-items-center">
                                         <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-account-box-line"></i>
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Account settings</h6>
                                            <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                         </div>
                                      </div>
                                   </a>
                                   <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                      <div class="media align-items-center">
                                         <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-lock-line"></i>
                                         </div>
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Privacy Settings</h6>
                                            <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                         </div>
                                      </div>
                                   </a>
                                   <div class="d-inline-block w-100 text-center p-3">
                                      <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </li>
                    </ul>
                 </div>
              </nav>
           </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12">
                    <div class="iq-card-transparent mb-0">
                       <div class="d-block text-center">
                          <h2 class="mb-3">Search by Book Name</h2>    
                          <div class="w-100 iq-search-filter">
                             <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                <li class="search-menu-opt">
                                   <div class="iq-dropdown">
                                      <div class="form-group mb-0">
                                         <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1">
                                            <option selected="">All</option>
                                            <option>A Books</option>
                                            <option>the Sun</option>
                                            <option>Harsh book</option>
                                            <option>People book</option>
                                            <option>the Fog</option>
                                         </select>
                                      </div>
                                   </div>
                                </li>
                                <li class="search-menu-opt">
                                   <div class="iq-dropdown">
                                      <div class="form-group mb-0">
                                         <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2">
                                            <option selected="">Genres</option>
                                            <option>General</option>
                                            <option>History</option>
                                            <option>Horror</option>
                                            <option>Fantasy</option>
                                            <option>Literary</option>
                                            <option>Manga</option>
                                         </select>
                                      </div>
                                   </div>
                                </li>
                                <li class="search-menu-opt">
                                   <div class="iq-dropdown">
                                      <div class="form-group mb-0">
                                         <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect3">
                                            <option selected="">Year</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                         </select>
                                      </div>
                                   </div>
                                </li>
                                <li class="search-menu-opt">
                                   <div class="iq-dropdown">
                                      <div class="form-group mb-0">
                                         <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect4">
                                            <option selected="">Author</option>
                                            <option>Milesiy Yor</option>
                                            <option>Ira Membrit</option>
                                            <option>Anna Mull</option>
                                            <option>John Smith</option>
                                            <option>David King</option>
                                            <option>Kusti Franti</option>
                                         </select>
                                      </div>
                                   </div>
                                </li>
                                <li class="search-menu-opt">
                                   <div class="iq-search-bar search-book d-flex align-items-center">
                                      <form action="#" class="searchbox">
                                         <input type="text" class="text search-input" placeholder="search here...">
                                         <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                      </form>
                                      <button type="submit" class="btn btn-primary search-data ml-2">Search</button>
                                   </div>
                                </li>
                             </ul>
                          </div> 
                       </div>
                    </div>
                    <div class="iq-card">
                       <div class="iq-card-body">
                          <div class="row">
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/01.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">A Hunger knut book</h6>
                                               <p class="font-size-13 line-height mb-1">Gurt Mistrioty</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$99</span>
                                               <h6><b>$89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/02.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">In Cold Blood Book..</h6>
                                               <p class="font-size-13 line-height mb-1">Anna Mull</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$129</span>
                                               <h6><b>$99</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/03.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">The Truman Capite</h6>
                                               <p class="font-size-13 line-height mb-1">Ira Membrit</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$79</span>
                                               <h6><b>$70</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/04.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">A Book Of Thinner</h6>
                                               <p class="font-size-13 line-height mb-1">Pete Sariya</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <h6><b>$129</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/05.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">Book of Texi Driver</h6>
                                               <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$129</span>
                                               <h6><b>$120</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/06.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">A man with those Faces</h6>
                                               <p class="font-size-13 line-height mb-1">Bob Frapples</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$89</span>
                                               <h6><b>$79</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/07.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">The Great Gatsb</h6>
                                               <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$99</span>
                                               <h6><b>$89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/08.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">The Cover Design Book</h6>
                                               <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$102</span>
                                               <h6><b>$89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-lg-0">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/09.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">Starving Start up book</h6>
                                               <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$105</span>
                                               <h6><b>$99</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-md-0 mb-lg-0">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/10.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">I can do it anything</h6>
                                               <p class="font-size-13 line-height mb-1">Terry Aki</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$103</span>
                                               <h6><b>$98</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/11.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">A horror Novel Book</h6>
                                               <p class="font-size-13 line-height mb-1">Hal Appeno</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$99</span>
                                               <h6><b>$79</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent m-0 mb-sm-0 mb-md-0 mb-lg-0">
                                   <div class="iq-card-body p-0">
                                      <div class="d-flex align-items-center">
                                         <div class="col-6 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/12.jpg" alt=""></a>
                                            <div class="view-book">
                                               <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                         </div>
                                         <div class="col-6">
                                            <div class="mb-2">
                                               <h6 class="mb-1">Think Outside Box</h6>
                                               <p class="font-size-13 line-height mb-1">Bill Emia</p>
                                               <div class="d-block">
                                                  <span class="font-size-13 text-warning">
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                  </span>
                                               </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                               <span class="pr-1 old-price">$110</span>
                                               <h6><b>$99</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                               <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                               <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 similar-detail">
                          <div class="iq-header-title">
                             <h4 class="card-title mb-0">Similar Books</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                          </div>
                       </div>                         
                       <div class="iq-card-body similar-contens">
                          <ul id="similar-slider" class="list-inline p-0 mb-0 row">
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/01.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">The Raze Night Book</h6>
                                         <p class="font-size-13 line-height mb-1">Tara Zona</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$102</span>
                                         <h6><b>$95</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                             </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/02.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Set For Life Book..</h6>
                                         <p class="font-size-13 line-height mb-1">Anna Rexia</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$120</span>
                                         <h6><b>$110</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/03.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Through the Breaking</h6>
                                         <p class="font-size-13 line-height mb-1">Bill Emia</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$105</span>
                                         <h6><b>$99</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/04.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Wild Beautiful Places</h6>
                                         <p class="font-size-13 line-height mb-1">Hal Appeno</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$100</span>
                                         <h6><b>$95</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/05.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">The Mockup Magazine</h6>
                                         <p class="font-size-13 line-height mb-1">Zack Lee</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$100</span>
                                         <h6><b>$89</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/06.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Every Book Of travel</h6>
                                         <p class="font-size-13 line-height mb-1">Moe Fugga</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <h6><b>$120</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                          <div class="iq-header-title">
                             <h4 class="card-title mb-0">Trendy Books</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                          </div>
                       </div>
                       <div class="iq-card-body trendy-contens">
                          <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/trendy-books/01.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">The Word Books Day..</h6>
                                         <p class="font-size-13 line-height mb-1">Paul Molive</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$99</span>
                                         <h6><b>$89</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/trendy-books/02.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">The catcher in the Rye</h6>
                                         <p class="font-size-13 line-height mb-1">Anna Sthesia</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$89</span>
                                         <h6><b>$79</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/trendy-books/03.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Little Black Book</h6>
                                         <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$100</span>
                                         <h6><b>$89</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/trendy-books/04.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Take The Risk Book</h6>
                                         <p class="font-size-13 line-height mb-1">Smith goal</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$120</span>
                                         <h6><b>$99</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/trendy-books/05.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">The Raze Night Book </h6>
                                         <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$150</span>
                                         <h6><b>$129</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                   <div class="col-5 p-0 position-relative image-overlap-shadow">
                                      <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/trendy-books/06.jpg" alt=""></a>
                                      <div class="view-book">
                                         <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                      </div>
                                   </div>
                                   <div class="col-7">
                                      <div class="mb-2">
                                         <h6 class="mb-1">Find the Wave Book..</h6>
                                         <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                         <div class="d-block">
                                            <span class="font-size-13 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            </span>
                                         </div>
                                      </div>
                                      <div class="price d-flex align-items-center">
                                         <span class="pr-1 old-price">$120</span>
                                         <h6><b>$100</b></h6>
                                      </div>
                                      <div class="iq-product-action">
                                         <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                         <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                          <div class="iq-header-title">
                             <h4 class="card-title mb-0">Favorite Reads</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                          </div>
                       </div>                         
                       <div class="iq-card-body favorites-contens">
                          <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                             <li class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                   <div class="col-5 p-0 position-relative">
                                      <a href="javascript:void();">
                                         <img src="images/favorite/05.jpg" class="img-fluid rounded w-100" alt="">
                                      </a>                                
                                   </div>
                                   <div class="col-7">
                                      <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                      <p class="mb-2">Author : Pedro Araez</p>                                          
                                      <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                         <span>Reading</span>
                                         <span class="mr-4">78%</span>
                                      </div>
                                      <div class="iq-progress-bar-linear d-inline-block w-100">
                                         <div class="iq-progress-bar iq-bg-primary">
                                            <span class="bg-primary" data-percent="78"></span>
                                         </div>
                                      </div>
                                      <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                   <div class="col-5 p-0 position-relative">
                                      <a href="javascript:void();">
                                         <img src="images/favorite/06.jpg" class="img-fluid rounded w-100" alt="">
                                      </a>                                
                                   </div>
                                   <div class="col-7">
                                      <h5 class="mb-2">Casey Christie night book into find...</h5>
                                      <p class="mb-2">Author : Michael klock</p>                                          
                                      <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                         <span>Reading</span>
                                         <span class="mr-4">78%</span>
                                      </div>
                                      <div class="iq-progress-bar-linear d-inline-block w-100">
                                         <div class="iq-progress-bar iq-bg-danger">
                                            <span class="bg-danger" data-percent="78"></span>
                                         </div>
                                      </div>
                                      <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                   <div class="col-5 p-0 position-relative">
                                      <a href="javascript:void();">
                                         <img src="images/favorite/07.jpg" class="img-fluid rounded w-100" alt="">
                                      </a>                                
                                   </div>
                                   <div class="col-7">
                                      <h5 class="mb-2">The Secret to English Busy People..</h5>
                                      <p class="mb-2">Author : Daniel Ace</p>                                          
                                      <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                         <span>Reading</span>
                                         <span class="mr-4">78%</span>
                                      </div>
                                      <div class="iq-progress-bar-linear d-inline-block w-100">
                                         <div class="iq-progress-bar iq-bg-info">
                                            <span class="bg-info" data-percent="78"></span>
                                         </div>
                                      </div>
                                      <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                   <div class="col-5 p-0 position-relative">
                                      <a href="javascript:void();">
                                         <img src="images/favorite/08.jpg" class="img-fluid rounded w-100" alt="">
                                      </a>                                
                                   </div>
                                   <div class="col-7">
                                      <h5 class="mb-2">The adventures of Robins books...</h5>
                                      <p class="mb-2">Author : Luka Afton</p>                                          
                                      <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                         <span>Reading</span>
                                         <span class="mr-4">78%</span>
                                      </div>
                                      <div class="iq-progress-bar-linear d-inline-block w-100">
                                         <div class="iq-progress-bar iq-bg-success">
                                            <span class="bg-success" data-percent="78"></span>
                                         </div>
                                      </div>
                                      <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div> 
</main>
