<main>
    @section('title')
        Our Categories
    @endsection
     <!-- loader END -->
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
                             <h4 class="card-title">Category Lists</h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="admin-add-category.html" class="btn btn-primary">Add New Category</a>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                             <table class="table data-tables table-striped table-bordered" style="width:100%">
                               <thead>
                                   <tr>
                                       <th width="5%">No</th>
                                       <th width="20%">Category Name</th>
                                       <th width="65%">Category Description</th>
                                       <th width="10%">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                       <td>1</td>
                                       <td>{{$category->name}}</td>
                                       <td>
                                         <p class="mb-0">{{$item->description}}</p>
                                       </td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                            <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#!"><i class="ri-pencil-line"></i></a>
                                            <a class="bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                         </div>
                                       </td>
                                   </tr>
                                @endforeach
                               </tbody>
                           </table>
                          </div>
                          {{ $categories->links('pagination::bootstrap-5') }}
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</main>
