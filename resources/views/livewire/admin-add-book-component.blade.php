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
                                    <h4 class="card-title">New Content</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="" wire:submit.prevent='addContent'>
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input type="text" class="form-control" wire:model.live='title'>
                                        @error('title')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Content Category:</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            wire:model.live='category'>
                                            <option selected="">Select Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Content Tag:</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            wire:model.live='tag'>
                                            <option selected="">Select Tag</option>
                                            @foreach ($tags as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Sell at Discount:</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            wire:model.live='on_offer'>
                                            <option selected="">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        @error('on_offer')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Publishing Expert:</label>
                                        <select class="form-control" id="exampleFormControlSelect2"
                                            wire:model.live='expert'>
                                            <option selected="">Publishing Expert</option>
                                            <option value="{{ Auth::user()->id }}">Myself</option>
                                            @foreach ($experts as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('expert')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Thumbnail:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                accept="image/png, image/jpeg, image/jpg" wire:model.live='thumbnail'>
                                            <label class="custom-file-label">Choose file</label>
                                            @error('thumbnail')
                                                <p class="text text-danger" style="margin-top: 20px;">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <br>
                                        @if ($thumbnail)
                                            <p>Preview</p>
                                            <img src="{{ $thumbnail->temporaryUrl() }}" width="70px" height="100px"
                                                style="margin-top:15px;" />
                                        @endif
                                        <span wire:loading wire:target='thumbnail' style="margin-top: 20px;">Uploading
                                            thumbnail...</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Cover Images:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" multiple
                                                accept="image/png, image/jpeg, image/jpg"
                                                wire:model.live='cover_images'>
                                            <label class="custom-file-label">Choose file</label>
                                            @error('cover_images')
                                                <p class="text text-danger" style="margin-top: 20px;">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <br>
                                        @if ($cover_images)
                                            <p>Preview</p>
                                            @foreach ($cover_images as $image)
                                                <img src="{{ $image->temporaryUrl() }}" width="70px" height="100px"
                                                    style="margin-top:20px;" />
                                            @endforeach
                                        @endif
                                        <span wire:loading wire:target='cover_images'
                                            style="margin-top: 15px;">Uploading cover images...</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Attach Content:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" multiple
                                                wire:model.live='attachment'>
                                            <label class="custom-file-label">Choose file</label>
                                            @error('attachment')
                                                <p class="text text-danger" style="margin-top: 20px;">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <br>
                                        <span wire:loading wire:target='attachment' style="margin-top: 15px;">Uploading
                                            attachment...</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Regular Price (Ksh):</label>
                                        <input type="text" class="form-control" wire:model.live='regular_price'>
                                        @error('regular_price')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Discounted Price (Ksh):</label>
                                        <input type="text" class="form-control" wire:model.live='discount_price'>
                                        @error('discount_price')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group" wire:ignore>
                                        <label>Description:</label>
                                        <textarea id="description" class="form-control" columns="2" rows="4" wire:model.live='description'
                                            placeholder="Briefly describe your content."></textarea>

                                    </div>
                                    @error('description')
                                        <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                    @enderror

                                    <div class="form-group">
                                        <label>Publication:</label>
                                        <select class="form-control" id="exampleFormControlSelect2"
                                            wire:model.live='status'>
                                            <option>Select status</option>
                                            <option value="published">Published</option>
                                            <option value="review">Review</option>
                                            <option value="witheld">Witheld</option>
                                        </select>
                                        @error('status')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                wire:target='addContent'>Create</span> <span wire:loading
                                                wire:target='addContent' class="spinner-border spinner-border-sm"
                                                role="status" aria-hidden="true"></button>
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
@script
    <script>
        $(function() {
            tinymce.init({
                selector: '#description',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinymce.triggerSave();
                        var sd_data = $('#description').val();
                        @this.set('description', sd_data);
                    });
                }
            });
        });
    </script>
@endscript
