<div>
    @section('title')
       My Content
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
                             <h4 class="card-title">My Content</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="{{route('expert.content.add')}}" class="btn btn-primary">Add New Content</a>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                             <table class="table data-tables table-striped table-bordered" style="width:100%">
                               <thead>
                                   <tr>
                                       <th style="width: 3%;">No</th>
                                       <th style="width: 12%;">Book Image</th>
                                       <th style="width: 15%;">Book Name</th>
                                       <th style="width: 15%;">Book Catrgory</th>
                                       <th style="width: 15%;">Book Author</th>
                                       <th style="width: 18%;">Book Description</th>
                                       <th style="width: 7%;">Book Price</th>
                                       <th style="width: 7%;">Book pdf</th>
                                       <th style="width: 15%;">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td><img class="rounded img-fluid" src="images/browse-books/01.jpg" alt=""></td>
                                       <td>Reading on the Worlds</td>
                                       <td>General Books</td>
                                       <td>Jhone Steben</td>
                                       <td>
                                         <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet</p>
                                       </td>
                                       <td>$89</td>
                                       <td><a href="#!"><i class="ri-file-fill text-secondary font-size-18"></i></a></td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                            <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-book.html"><i class="ri-pencil-line"></i></a>
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
</div>
