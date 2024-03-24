<main>
    @section('title')
    Our Experts
    @endsection
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
                             <h4 class="card-title">Our Experts</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="{{route('expert.add')}}" class="btn btn-primary">Add New Expert</a>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                             <table class="table data-tables table-striped table-bordered" style="width:100%">
                                <thead>
                                   <tr>
                                      <th style="width: 5%;">No</th>
                                      <th style="width: 5%;">Profile</th>
                                      <th style="width: 20%;">Expert Name</th>
                                      <th style="width: 60%;">Description</th>
                                      <th style="width: 10%;">Action</th>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td>1</td>
                                      <td>
                                         <img src="{{asset('images/user/01.jpg')}}" class="rounded img-fluid avatar-50" alt="author-profile">
                                      </td>
                                      <td>Jhone Steben</td>
                                      <td>
                                         <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                      </td>
                                      <td>
                                         <div class="flex align-items-center list-user-action">
                                            <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#!"><i class="ri-pencil-line"></i></a>
                                            <a class="bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                         </div>
                                      </td>
                                   </tr>
                                </tbody>
                             </table>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</main>
