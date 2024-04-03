
<x-guest-layout>
    @section('title')
        Join us
    @endsection
    <section class="sign-in-page">
        <div class="container p-0" style="max-width: 90vw;">
            <div class="row no-gutters height-self-center">
                <div class="rounded col-sm-12 align-self-center page-content">
                    <div class="m-0 row">
                        <div class="col-sm-12 sign-in-page-data">
                            <div class="rounded sign-in-from bg-primary">
                                <h3 class="mb-0 text-center text-white">Reset password</h3>
                                <p class="text-center text-white">Reset passowrd to get full access.</p>
                                <x-validation-errors class="mb-4" style="color: red" />
                                <form class="mt-4 form-text" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email address</label>
                                        <input type="email" name="email" class="mb-0 form-control"
                                            id="exampleInputEmail2" placeholder="Enter email" :value="old('email', $request->email)" required autofocus autocomplete="username"
                                            style="background-color:black">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" name="password" class="mb-0 form-control"
                                            id="exampleInputPassword1" placeholder="Password"
                                            style="background-color:black">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="mb-0 form-control"
                                            id="exampleInputPassword1" placeholder="Confirm Password"
                                            style="background-color:black">
                                    </div>
                                    <div class="text-center sign-info">
                                        <button type="submit" class="mb-2 btn btn-white d-block w-100">Reset Passowrd</button>
                                        <span class="text-dark d-inline-block line-height-2">Remembered  old password? <a
                                                href="{{ route('login') }}" class="text-white">Log In</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

