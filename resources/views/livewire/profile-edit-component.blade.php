<main>
    @section('title')
        My Profile
    @endsection
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iq-edit-list-data">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Personal Information</h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <form>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-md-12">
                                                        <div class="profile-img-edit">
                                                            <img class="profile-pic"
                                                                src="{{ Auth::user()->profile_photo_url }}"
                                                                alt="profile-pic" height="150x" width="150x">
                                                            <div class="p-image">
                                                                <i class="ri-pencil-line upload-button"></i>
                                                                <input class="file-upload" type="file"
                                                                    accept="image/*" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" row align-items-center">
                                                    <div class="form-group col-sm-6">
                                                        <label for="uname">Full Name:</label>
                                                        <input type="text" class="form-control" id="uname"
                                                            value="{{ Auth::user()->name }}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="email">Email:</label>
                                                        <input disabled type="email" class="form-control"
                                                            id="email" value="{{ Auth::user()->email }}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="phone_number">Phone Number:</label>
                                                        <input disabled type="tel" class="form-control"
                                                            id="phone_number" value="+{{ Auth::user()->phone_number }}">
                                                    </div>
                                                </div>
                                                <button type="submit" class="mr-2 btn btn-primary">Submit</button>
                                                <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                            </form>
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
</main>
