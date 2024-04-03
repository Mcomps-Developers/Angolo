<x-guest-layout>
    @section('title')
        Join us
    @endsection
    <section class="sign-in-page">
        <div class="container p-0" >
            <div class="row no-gutters height-self-center">
                <div class="rounded col-sm-12 align-self-center page-content">
                    <div class="m-0 row">
                        <div class="col-sm-12 sign-in-page-data">
                            <div class="rounded sign-in-from bg-primary">
                                <h3 class="mb-0 text-center text-white">Sign Up</h3>
                                <p class="text-center text-white">Create an account to get full access.</p>
                                <x-validation-errors class="mb-4" style="color: red" />
                                <form class="mt-4 form-text" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="mb-0 form-control"
                                            id="exampleInputEmail1" placeholder="Your Full Name"
                                            >
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="mb-0 form-control"
                                            id="exampleInputEmail2" placeholder="Enter email"
                                            >
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <!-- Country Code Dropdown -->
                                            <div class="input-group-prepend">
                                                <select class="custom-select form-control" name="country_code" id="countryCode"
                                                    >
                                                    <option value="">Country Code</option>
                                                    <option value="254">+254</option>
                                                    <option value="255">+255</option>
                                                    <option value="256">+256</option>
                                                </select>
                                            </div>
                                            <!-- Phone Number Input -->
                                            <input type="numeric" name="phone_number" class="mb-0 form-control"
                                                id="exampleInputEmail2" placeholder="Start with 7 or 1 xxx xxx xxx"
                                                >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="mb-0 form-control"
                                            id="exampleInputPassword1" placeholder="Password"
                                            >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="mb-0 form-control"
                                            id="exampleInputPassword1" placeholder="Confirm Password"
                                            >
                                    </div>
                                    <div class="d-inline-block w-100">
                                        <div class="pt-1 mt-2 custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" name="terms" class="custom-control-input"
                                                id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I accept <a
                                                    href="#" class="text-light">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="text-center sign-info">
                                        <button type="submit" class="mb-2 btn btn-white d-block w-100">Sign Up</button>
                                        <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a
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
