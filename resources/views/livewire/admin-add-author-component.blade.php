<main>
    @section('title')
        Add Expert
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
                                    <h4 class="card-title">New Expert</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form wire:submit.prevent='addExpert'>
                                    <div class="form-group">
                                        <label>Expert Name:</label>
                                        <input type="text" class="form-control" wire:model.live='name'>
                                        @error('name')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address:</label>
                                        <input type="email" class="form-control" wire:model.live='email'>
                                        @error('email')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number:</label>
                                        <input type="tel" class="form-control" wire:model.live='phone_number'>
                                        @error('phone_number')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Publishing Category:</label>
                                        <select name="" id="" class="form-control"
                                            wire:model.live='category'>
                                            <option value="">--</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span wire:loading.remove
                                                wire:target='addExpert'>Create</span> <span wire:loading
                                                wire:target='addExpert' class="spinner-border spinner-border-sm"
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
