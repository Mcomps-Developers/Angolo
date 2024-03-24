<main>
    @section('title')
        Crate Category
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
                                    <h4 class="card-title">Add Category</h4>
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
                                        <label>Category Icon:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                accept="application/jpg, application/png" wire:model.live="icon">
                                            <label class="custom-file-label">Choose icon</label>
                                            @error('icon')
                                                <p class="text text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <br>
                                        @if ($icon)
                                            <img src="{{ $icon->temporaryUrl() }}" width="70px" height="100px"
                                                style="margin-top:15px;" />
                                        @endif
                                        <span wire:loading wire:target='icon' style="margin-top: 15px;">Uploading icon...</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Description:</label>
                                        <textarea class="form-control" columns="2" rows="4" wire:model.live='category_description'></textarea>
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
