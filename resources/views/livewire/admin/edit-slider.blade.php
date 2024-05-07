<main>
    @section('title')
        Edit Slider
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
                                    <h4 class="card-title">Edit Slider</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form wire:submit.prevent='addSlider'>
                                    <div class="form-group">
                                        <label>Slider Title:</label>
                                        <input type="text" class="form-control" wire:model.live='title'>
                                        @error('title')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Displays from:</label>
                                        <input type="date" class="form-control" wire:model.live='from'>
                                        @error('from')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Displays to:</label>
                                        <input type="date" class="form-control" wire:model.live='to'>
                                        @error('to')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Slider Image:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                accept="application/jpg, application/png" wire:model.live="image">
                                            <label class="custom-file-label">Choose image</label>
                                            @error('image')
                                                <p class="text text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                        <br>
                                        <small style="margin-top: 10px"><i class="fa fa-info-circle text-info"></i> Image will be resized to
                                            <b>800x300</b></small>
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="200px" height="70px"
                                                style="margin-top:15px;" />
                                        @endif
                                        <span wire:loading wire:target='image' style="margin-top: 15px;">Uploading
                                            image...</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <textarea class="form-control" columns="2" rows="4" wire:model.live='description'></textarea>
                                        @error('description')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                wire:target='addSlider'>Edit</span> <span wire:loading
                                                wire:target='addSlider' class="spinner-border spinner-border-sm"
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
