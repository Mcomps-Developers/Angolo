<main>
    @section('title')
        New Blog
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
                                    <h4 class="card-title">New Blog</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="" wire:submit.prevent='addBlog'>
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input type="text" class="form-control" wire:model.live='title'>
                                        @error('title')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Category:</label>
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
                                        <label>Main Tag:</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            wire:model.live='tag'>
                                            <option selected="">Select Main Tag</option>
                                            @foreach ($tags as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag')
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
                                            <p style="margin-top:20px;">Preview</p>
                                            <img src="{{ $thumbnail->temporaryUrl() }}" width="70px" height="100px"
                                                style="margin-top:15px;" />
                                        @endif
                                        <span wire:loading wire:target='thumbnail' style="margin-top: 20px;">Uploading
                                            thumbnail...</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Featured Image:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                accept="image/png, image/jpeg, image/jpg"
                                                wire:model.live='featured_image'>
                                            <label class="custom-file-label">Choose file</label>
                                            @error('featured_image')
                                                <p class="text text-danger" style="margin-top: 20px;">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <br>
                                        @if ($featured_image)
                                            <p style="margin-top:20px;">Preview</p>
                                            <img src="{{ $featured_image->temporaryUrl() }}" width="250px"
                                                height="100px" style="margin-top:15px;" />
                                        @endif
                                        <span wire:loading wire:target='featured_image'
                                            style="margin-top: 15px;">Uploading featured image...</span>
                                    </div>
                                    <div class="form-group" wire:ignore>
                                        <label>Blog Details:</label>
                                        <textarea id="blog_content" class="form-control" columns="2" rows="4" wire:model.live='blog_content'
                                            placeholder="Enter blog content."></textarea>
                                    </div>
                                    @error('blog_content')
                                        <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>More Tags:</label>
                                        <input type="text" class="form-control" wire:model.live='more_tags'>
                                        @error('more_tags')
                                            <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                wire:target='addBlog'>Create</span> <span wire:loading
                                                wire:target='addBlog' class="spinner-border spinner-border-sm"
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
                selector: '#blog_content',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinymce.triggerSave();
                        var sd_data = $('#blog_content').val();
                        @this.set('blog_content', sd_data);
                    });
                }
            });
        });
    </script>
@endscript
