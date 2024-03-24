<main>
    @section('title')
        New Content
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
                                    <h4 class="card-title">Add Books</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label>Book Name:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Book Category:</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Book Category</option>
                                            <option>General Books</option>
                                            <option>History Books</option>
                                            <option>Horror Story</option>
                                            <option>Arts Books</option>
                                            <option>Film & Photography</option>
                                            <option>Business & Economics</option>
                                            <option>Comics & Mangas</option>
                                            <option>Computers & Internet</option>
                                            <option> Sports</option>
                                            <option> Travel & Tourism</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Book Author:</label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option selected="" disabled="">Book Author</option>
                                            <option>Jhone Steben</option>
                                            <option>John Klok</option>
                                            <option>Ichae Semos</option>
                                            <option>Jules Boutin</option>
                                            <option>Kusti Franti</option>
                                            <option>David King</option>
                                            <option>Henry Jurk</option>
                                            <option>Attilio Marzi</option>
                                            <option>Argele Intili</option>
                                            <option>Attilio Marzi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Book Image:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                accept="image/png, image/jpeg">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Book pdf:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                accept="application/pdf, application/vnd.ms-excel">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Book Price:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Book Description:</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
