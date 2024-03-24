<main>
    @section('title')
        My Profile
    @endsection
<div class="wrapper">
   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row profile-content">
            <div class="col-12 col-md-12 col-lg-4">
               <div class="iq-card">
                  <div class="iq-card-body profile-page">
                     <div class="profile-header">
                        <div class="text-center cover-container">
                           <img src="{{asset('images/user/1.jpg')}}" alt="profile-bg" class="rounded-circle img-fluid">
                           <div class="mt-3 profile-detail">
                              <h3>{{Auth::user()->name}}</h3>
                              <p class="text-primary">Web designer</p>
                              <p>Phasellus faucibus mollis pharetra. Proin blandit ac massa.Morbi nulla dolor, ornare at commodo non, feugiat non nisi.</p>
                           </div>
                           <div class="iq-social d-inline-block align-items-center">
                              <ul class="p-0 mb-0 list-inline d-flex align-items-center">
                                 <li>
                                    <a href="#" class="mr-2 avatar-40 rounded-circle bg-primary facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="mr-2 avatar-40 rounded-circle bg-primary twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="mr-2 avatar-40 rounded-circle bg-primary youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                 </li>
                                 <li >
                                    <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card">
                  <div class="mb-0 iq-card-header d-flex justify-content-between align-items-center">
                     <div class="iq-header-title">
                        <h4 class="mb-0 card-title">Personal Details</h4>
                     </div>
                  </div> 
                  <div class="iq-card-body">
                     <ul class="p-0 mb-0 list-inline">
                        <li>
                           <div class="mb-3 row align-items-center justify-content-between">
                              <div class="col-sm-6">
                                 <h6>Birthday</h6>                                       
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">3rd March</p>                                       
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mb-3 row align-items-center justify-content-between">
                              <div class="col-sm-6">
                                 <h6>Address</h6>                                       
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">Landon</p>                                       
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mb-3 row align-items-center justify-content-between">
                              <div class="col-sm-6">
                                 <h6>Phone</h6>                                       
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">{{Auth::user()->phone_number}}</p>                                       
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mb-3 row align-items-center justify-content-between">
                              <div class="col-sm-6">
                                 <h6>Email</h6>                                       
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">{{Auth::user()->email}}</p>                                       
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mb-3 row align-items-center justify-content-between">
                              <div class="col-sm-6">
                                 <h6>Twitter</h6>                                       
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">@Barry</p>                                       
                              </div>
                           </div>
                        </li>                              
                        <li>
                           <div class="mb-3 row align-items-center justify-content-between">
                              <div class="col-sm-6">
                                 <h6>Facebook</h6>                                       
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">@Barry_Tech</p>                                       
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="iq-card">
                  <div class="mb-0 iq-card-header d-flex justify-content-between align-items-center">
                     <div class="iq-header-title">
                        <h4 class="mb-0 card-title">Skill Progress</h4>
                     </div>
                  </div> 
                  <div class="iq-card-body">
                     <ul class="p-0 mb-0 list-inline">
                        <li>
                           <div class="mb-3 d-flex align-items-center justify-content-between">
                              <h6>Biography</h6>
                              <div class="mt-1 iq-progress-bar-linear d-inline-block w-50">
                                 <div class="iq-progress-bar iq-bg-primary">
                                    <span class="bg-primary" data-percent="70"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mb-3 d-flex align-items-center justify-content-between">
                              <h6>Horror</h6>
                              <div class="mt-1 iq-progress-bar-linear d-inline-block w-50">
                                 <div class="iq-progress-bar iq-bg-danger">
                                    <span class="bg-danger" data-percent="50"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mb-3 d-flex align-items-center justify-content-between">
                              <h6>Comic Book</h6>
                              <div class="mt-1 iq-progress-bar-linear d-inline-block w-50">
                                 <div class="iq-progress-bar iq-bg-info">
                                    <span class="bg-info" data-percent="65"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Adventure</h6>
                              <div class="mt-1 iq-progress-bar-linear d-inline-block w-50">
                                 <div class="iq-progress-bar iq-bg-success">
                                    <span class="bg-success" data-percent="85"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8">
               <div class="row">
                  <div class="col-md-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="mb-0 iq-card-header d-flex justify-content-between align-items-center">
                           <div class="iq-header-title">
                              <h4 class="mb-0 card-title">Latest Uploads</h4>
                           </div>
                        </div> 
                        <div class="iq-card-body">
                           <ul class="p-0 mb-0 list-inline">
                              <li class="mb-4 d-flex align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-file-3-fill"></i></span></div>
                                 <div class="ml-3 media-support-info">
                                    <h6>Documentation</h6>
                                    <p class="mb-0">48kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false">
                                       <i class="ri-more-line"></i>
                                       </span>
                                       <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-user-unfollow-line"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-close-circle-line"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-4 d-flex align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-image-fill"></i></span></div>
                                 <div class="ml-3 media-support-info">
                                    <h6>Images</h6>
                                    <p class="mb-0">204kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="false">
                                       <i class="ri-more-line"></i>
                                       </span>
                                       <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-user-unfollow-line"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-close-circle-line"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-4 d-flex align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-video-fill"></i></span></div>
                                 <div class="ml-3 media-support-info">
                                    <h6>Videos</h6>
                                    <p class="mb-0">509kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" id="dropdownMenuButton03" data-toggle="dropdown" aria-expanded="false">
                                       <i class="ri-more-line"></i>
                                       </span>
                                       <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-user-unfollow-line"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-close-circle-line"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-4 d-flex align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-file-3-fill"></i></span></div>
                                 <div class="ml-3 media-support-info">
                                    <h6>Resources</h6>
                                    <p class="mb-0">48kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" id="dropdownMenuButton04" data-toggle="dropdown" aria-expanded="false">
                                       <i class="ri-more-line"></i>
                                       </span>
                                       <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-user-unfollow-line"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-close-circle-line"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-refresh-line"></i></span></div>
                                 <div class="ml-3 media-support-info">
                                    <h6>Celine Dion</h6>
                                    <p class="mb-0">204kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" id="dropdownMenuButton05" data-toggle="dropdown" aria-expanded="false">
                                       <i class="ri-more-line"></i>
                                       </span>
                                       <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-user-unfollow-line"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="mr-2 ri-close-circle-line"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="mb-0 iq-card-header d-flex justify-content-between align-items-center">
                           <div class="iq-header-title">
                              <h4 class="mb-0 card-title">Top Books</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="p-0 mb-0 list-inline">
                              <li>
                                 <div class="mb-2 iq-details">
                                    <span class="title">Adventure</span>
                                    <div class="float-right percentage text-primary">95 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-primary" data-percent="95"></span>
                                       </div>
                                    </div>
                                 </div>                                       
                              </li>
                              <li>
                                 <div class="mb-2 iq-details">
                                    <span class="title">Horror</span>
                                    <div class="float-right percentage text-warning">72 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-warning" data-percent="72"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                <div class="mb-2 iq-details">
                                    <span class="title">Comic Book</span>
                                    <div class="float-right percentage text-info">75 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-info" data-percent="75"></span>
                                       </div>
                                    </div>
                                 </div> 
                              </li>
                              <li>
                                 <div class="mb-2 iq-details">
                                    <span class="title">Biography</span>
                                    <div class="float-right percentage text-danger">70 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-danger" data-percent="70"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="iq-details">
                                    <span class="title">Mystery</span>
                                    <div class="float-right percentage text-success">80 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-success" data-percent="80"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card">
                  <div class="mb-0 iq-card-header d-flex justify-content-between align-items-center">
                     <div class="iq-header-title">
                        <h4 class="mb-0 card-title">Daily Sales</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-eye-fill"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-delete-bin-6-fill"></i>Delete</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-pencil-fill"></i>Edit</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-printer-fill"></i>Print</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-file-download-fill"></i>Download</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="iq-card-body">
                    <ul class="p-0 m-0 perfomer-lists">
                        <li class="mb-4 d-flex align-items-center">
                           <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="images/user/06.jpg" alt=""></div>
                           <div class="ml-3 media-support-info">
                              <h5>Reading on the World</h5>
                              <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <span class="text-dark"><b>+$82</b></span>
                           </div>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                           <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="images/user/07.jpg" alt=""></div>
                           <div class="ml-3 media-support-info">
                              <h5>Little Black Book</h5>
                              <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <span class="text-dark"><b>+$90</b></span>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="images/user/08.jpg" alt=""></div>
                           <div class="ml-3 media-support-info">
                              <h5>See the More Story</h5>
                              <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-cener">
                              <span class="text-dark"><b>+$85</b></span>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="iq-card">
                  <div class="mb-0 iq-card-header d-flex justify-content-between align-items-center">
                     <div class="iq-header-title">
                        <h4 class="mb-0 card-title">Top Products</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-eye-fill"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-delete-bin-6-fill"></i>Delete</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-pencil-fill"></i>Edit</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-printer-fill"></i>Print</a>
                              <a class="dropdown-item" href="#"><i class="mr-2 ri-file-download-fill"></i>Download</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="iq-card-body">
                    <ul class="p-0 m-0 perfomer-lists">
                        <li class="mb-3 row align-items-center justify-content-between">
                           <div class="col-md-8">
                              <h5>Find The Wave Book</h5>
                              <p class="mb-0">General Book</p>
                           </div>
                           <div class="text-right col-md-4">
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <span class="mr-3 text-primary"><b>+$92</b></span>
                                 <div class="mt-1 iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar iq-bg-primary">
                                       <span class="bg-primary" data-percent="92"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="row align-items-center justify-content-between">
                           <div class="col-md-8">
                              <h5>A man with those Faces</h5>
                              <p class="mb-0">Biography Book</p>
                           </div>
                           <div class="text-right col-md-4">
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <span class="mr-3 text-danger"><b>+$85</b></span>
                                 <div class="mt-1 iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar iq-bg-primary">
                                       <span class="bg-danger" data-percent="85"></span>
                                    </div>
                                 </div>
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
