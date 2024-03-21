<div>
    @section('title')
        Home
    @endsection
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-card" style="">
                        <div class="iq-card-body">
                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner" style="height: 180px">
                                 <div class="carousel-item active">
                                    <img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100" alt="#">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100" alt="#">
                                 </div>
                                 <div class="carousel-item">
                                    <img src="{{ asset('images/small/img-1.jpg') }}" class="d-block w-100" alt="#">
                                 </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                              </a>
                           </div>
                        </div>
                     </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                          <div class="iq-header-title">
                             <h4 class="card-title mb-0">Our Categories</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="#!" class="btn btn-sm btn-primary view-more">View More</a>
                          </div>
                       </div>
                       <div class="iq-card-body single-similar-contens">
                          <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                             <li class="col-md-3">
                                <div class="row align-items-center">
                                   <div class="col-5">
                                      <div class="position-relative image-overlap-shadow">
                                         <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/01.jpg" alt=""></a>
                                         <div class="view-book">
                                            <a href="{{ route('book.page') }}" class="btn btn-sm btn-white">View Category</a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-7 pl-0">
                                      <h6 class="mb-2">Category description</h6>
                                      <p class="text-body">0 : Items</p>
                                      <a href="#" class="text-dark" tabindex="-1">Browse<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="row align-items-center">
                                   <div class="col-5">
                                      <div class="position-relative image-overlap-shadow">
                                         <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/02.jpg" alt=""></a>
                                         <div class="view-book">
                                            <a href="{{ route('book.page') }}" class="btn btn-sm btn-white">View Book</a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-7 pl-0">
                                      <h6 class="mb-2">Set For Lifr Being Scott Trench..</h6>
                                      <p class="text-body">0 : Items</p>
                                      <a href="#" class="text-dark" tabindex="-1">View Category<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="row align-items-center">
                                   <div class="col-5">
                                      <div class="position-relative image-overlap-shadow">
                                         <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/03.jpg" alt=""></a>
                                         <div class="view-book">
                                            <a href="{{ route('book.page') }}" class="btn btn-sm btn-white">View Book</a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-7 pl-0">
                                      <h6 class="mb-2">A Birth and Evolutions of the Soul...</h6>
                                      <p class="text-body">0 : Items</p>
                                      <a href="#" class="text-dark" tabindex="-1">View Category<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="row align-items-center">
                                   <div class="col-5">
                                      <div class="position-relative image-overlap-shadow">
                                         <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/04.jpg" alt=""></a>
                                         <div class="view-book">
                                            <a href="{{ route('book.page') }}" class="btn btn-sm btn-white">View Book</a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-7 pl-0">
                                      <h6 class="mb-2">The Nature of world Beautiful Places.</h6>
                                      <p class="text-body">0 : Items</p>
                                      <a href="#" class="text-dark" tabindex="-1">View Category<i class="ri-arrow-right-s-line"></i></a>
                                   </div>
                                </div>
                             </li>
                             <li class="col-md-3">
                                <div class="row align-items-center">
                                   <div class="col-5">
                                      <div class="position-relative image-overlap-shadow">
                                         <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/similar-books/05.jpg" alt=""></a>
                                         <div class="view-book">
                                            <a href="{{ route('book.page') }}" class="btn btn-sm btn-white">View Book</a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-7 pl-0">
                                      <h6 class="mb-2">The mackup magazine find books..</h6>
                                      <p class="text-body">Author : Zack Lee</p>
                                      <a href="#" class="text-dark" tabindex="-1">Read Now<i class="ri-arrow-right-s-line"></i></a>
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
                <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                            <div class="iq-header-title">
                                <h4 class="card-title">Featured Books</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2"
                                        data-toggle="dropdown">
                                        This Week<i class="ri-arrow-down-s-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none"
                                        aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-5 pr-0">
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                            src="{{ asset('images/page-img/featured-book.png') }}" alt=""></a>
                                </div>
                                <div class="col-sm-7 mt-3 mt-sm-0">
                                    <h4 class="mb-2">Casey Christie night book into find...</h4>
                                    <p class="mb-2">Author: Gheg origin</p>
                                    <div class="mb-2 d-block">
                                        <span class="font-size-12 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <span class="text-dark mb-3 d-block">Lorem Ipsum is simply dummy test in find a of
                                        the printing and typeset ing industry into end.</span>
                                    <button type="submit" class="btn btn-primary learn-more">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                            <div class="iq-header-title">
                                <h4 class="card-title">Featured Writer</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3"
                                        data-toggle="dropdown">
                                        This Week<i class="ri-arrow-down-s-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none"
                                        aria-labelledby="dropdownMenuButton3">
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/01.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Brandon Guidelines</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/02.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Hugh Millie-Yate</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">432</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/03.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Nathaneal Down</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">5471</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/04.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Thomas R. Toe</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">8764</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/05.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Druid Wensleydale</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">8987</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/06.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/07.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Desmond Eagle</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">4324</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/08.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Lurch Schpellchek</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">012</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/09.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/10.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/11.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle"
                                                src="{{ asset('images/user/01.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span
                                                class="text-body">2831</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Favorite Reads</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="/category" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body favorites-contens">
                            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/01.jpg" class="img-fluid rounded w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                            <p class="mb-2">Author : Pedro Araez</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-primary">
                                                    <span class="bg-primary" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/02.jpg') }}"
                                                    class="img-fluid rounded w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Casey Christie night book into find...</h5>
                                            <p class="mb-2">Author : Michael klock</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-danger">
                                                    <span class="bg-danger" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/03.jpg" class="img-fluid rounded w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The Secret to English Busy People..</h5>
                                            <p class="mb-2">Author : Daniel Ace</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-info">
                                                    <span class="bg-info" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ asset('images/favorite/04.jpg') }}"
                                                    class="img-fluid rounded w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The adventures of Robins books...</h5>
                                            <p class="mb-2">Author : Luka Afton</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-success">
                                                    <span class="bg-success" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
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
</div>
