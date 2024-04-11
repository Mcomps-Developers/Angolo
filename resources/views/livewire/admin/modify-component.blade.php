<main>
    @section('title')
        Platform Terms and policies
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
                                    <h4 class="card-title">Platform Terms and policies</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="" wire:submit.prevent='updateTerms'>
                                    <div class="form-group" wire:ignore>
                                        <label>Content:</label>
                                        <textarea id="content" class="form-control" columns="2" rows="4" wire:model.live='content'
                                            placeholder="Create and modify your platform terms of use, cookie policy, privacy policy, refund policy, disclaimer, contact information, copyright information, acceptable use policy etc."></textarea>
                                    </div>
                                    @error('content')
                                        <p class="text text-danger" style="margin-top: 20px;">{{ $message }}</p>
                                    @enderror
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                wire:target='updateTerms'>Update</span> <span wire:loading
                                                wire:target='updateTerms' class="spinner-border spinner-border-sm"
                                                role="status" aria-hidden="true"></button>
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
                selector: '#content',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinymce.triggerSave();
                        var sd_data = $('#content').val();
                        @this.set('content', sd_data);
                    });
                }
            });
        });
    </script>
@endscript