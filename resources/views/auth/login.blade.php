<x-guest-layout>
    @section('title')
        Login
    @endsection
    <section class="sign-in-page">
        <div class="container p-0" style="max-width: 90vw;">
            <div class="row no-gutters height-self-center">
                <div class="rounded col-sm-12 align-self-center page-content">
                    <div class="m-0 row">
                        <div class="col-sm-12 sign-in-page-data">
                            <div class="rounded sign-in-from bg-primary">
                                <h3 class="mb-0 text-center text-white">Sign in</h3>
                                <p class="text-center text-white">Sign in to get full platform experience.</p>
                                <x-validation-errors class="mb-4" style="color: red" />
                                <form class="mt-4 form-text" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" name="email" class="mb-0 form-control"
                                            id="exampleInputEmail1" placeholder="Enter Email Address" style="background-color: black">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <a href="{{ route('password.request') }}" class="float-right text-dark">Forgot
                                            password?</a>
                                        <input type="password" name="password" class="mb-0 form-control"
                                            id="exampleInputPassword1" placeholder="Password" style="background-color: black">
                                    </div>
                                    <div class="d-inline-block w-100">
                                        <div class="pt-1 mt-2 custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="text-center sign-info">
                                        <button type="submit" class="mb-2 btn btn-white d-block w-100">Sign in</button>
                                        <span class="text-dark dark-color d-inline-block line-height-2">Don't have an
                                            account? <a href="{{ route('register') }}" class="text-white">Sign
                                                up</a></span>
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
