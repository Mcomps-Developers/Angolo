<main>
    @section('title')
        Contact us
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
                                <div class="tab-pane fade active show" id="manage-contact" role="tabpanel">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Contact us</h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <form wire:submit.prevent='sendMessage'>
                                                <div class="form-group">
                                                    <label for="full_name">Full Name:</label>
                                                    <input type="text" class="form-control" id="full_name"
                                                        value="Full Name" wire:model.live='full_name'>

                                                    @error('subject')
                                                        <p style="color: red; margin-top:15px;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="subject">Subject:</label>
                                                    <input type="text" class="form-control" id="subject"
                                                        value="Message subject eg Enquiry" wire:model.live='subject'>

                                                    @error('subject')
                                                        <p style="color: red; margin-top:15px;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone_number">Phone Number:</label>
                                                    <input type="text" class="form-control" id="phone_number"
                                                        value="starting with 254" wire:model.live='phone_number'>

                                                    @error('phone_number')
                                                        <p style="color: red; margin-top:15px;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="text" class="form-control" id="email"
                                                        placeholder="active email address" wire:model.live='email'>

                                                    @error('email')
                                                        <p style="color: red; margin-top:15px;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message">Message:</label>
                                                    <textarea name="" id="message" class="form-control" cols="30" rows="2" wire:model='message'></textarea>

                                                    @error('message')
                                                        <p style="color: red; margin-top:15px;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                        wire:target='sendMessage'>Send Message</span> <span wire:loading
                                                        wire:target='sendMessage'
                                                        class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></button>
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
