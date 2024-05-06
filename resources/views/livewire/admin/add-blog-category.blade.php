<main>
    @section('title')
        Create Blog Category
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
                                    <h4 class="card-title">New Category</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form wire:submit.prevent='addCategory'>
                                    <div class="form-group">
                                        <label>Category Name:</label>
                                        <input type="text" class="form-control" wire:model.live='category_name'>
                                        @error('category_name')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Category Description:</label>
                                        <textarea class="form-control" placeholder="Describe what your category will entail." columns="2" rows="4"
                                            wire:model.live='category_description'></textarea>
                                        @error('category_description')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                wire:target='addCategory'>Create</span> <span wire:loading
                                                wire:target='addCategory' class="spinner-border spinner-border-sm"
                                                role="status" aria-hidden="true">
                                        </button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
