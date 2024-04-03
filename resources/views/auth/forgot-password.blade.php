<x-guest-layout>
    @section('title')
        Forgot Password
    @endsection
    <section class="sign-in-page">
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="rounded col-sm-12 align-self-center page-content">
                    <div class="m-0 row">
                        <div class="col-sm-12 sign-in-page-data">
                            <div class="rounded sign-in-from bg-primary">
                                <h3 class="mb-0 text-center text-white">Forgot Passowrd</h3>
                                @session('status')
                                    <div class="mb-4 text-sm font-medium text-green-600">
                                        {{ $value }}
                                    </div>
                                @else
                                    <p class="text-center text-white">Forgot your password? No problem. Just let us know
                                        your email address and we will email you a password reset link that will allow
                                        you to choose a new one.</p>
                                @endsession

                                <x-validation-errors class="mb-4" style="color: red" />
                                <form class="mt-4 form-text" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" name="email" class="mb-0 form-control"
                                            id="exampleInputEmail1" placeholder="Enter Email Address"
                                            style="background-color: black">
                                    </div>
                                    <div class="text-center sign-info">
                                        <button type="submit" class="mb-2 btn btn-white d-block w-100">Request Reset
                                            Link</button>
                                        <span class="text-dark dark-color d-inline-block line-height-2">Remembered
                                            password? <a href="{{ route('login') }}" class="text-white">Sign
                                                in</a></span>
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
