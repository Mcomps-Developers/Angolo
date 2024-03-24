{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    @section('title')
        Join us
    @endsection
    <div class="flex flex-col items-center justify-center h-screen">


        <div class="w-full max-w-sm p-4 mx-auto md:px-10">

            <div>
                <!-- logo -->
                <div class="flex justify-center mb-12">
                    <img src="{{ asset('assets/images/logo.html') }}" alt=""
                        class="w-auto h-16 shrink-0 bg-fuchsia-100 px-3 rounded-2xl p-2.5">
                </div>
                <x-validation-errors class="mb-4" style="color: red" />
                <form method="POST" action="{{ route('register') }}" class="space-y-3">
                    @csrf
                    <select name="utype" id="" class="!w-full">
                        <option value="">-Join as-</option>
                        <option value="byr">Student</option>
                        <option value="slr">Expert</option>
                    </select>
                    <input class="!w-full" id="username" name="name" type="text" autofocus=""
                        placeholder="Full Name">
                    <input class="!w-full" id="name" name="email" type="email" autofocus=""
                        placeholder="Email">
                    <input class="!w-full" id="phone_number" name="phone_number" type="text" autofocus=""
                        placeholder="Phone Number">
                    <input class="!w-full" id="password" name="password" type="password" autofocus=""
                        placeholder="Password">
                    <input class="!w-full" id="password" name="password_confirmation" type="password" autofocus=""
                        placeholder="Confirm Password">

                    <button type="submit"
                        class="font-medium w-full rounded-lg bg-slate-900 py-1.5 px-4 text-white h-[38px] active:scale-[0.97] transition-all duration-150">
                        <span>Get Started</span> </button>

                    <div class="space-x-2 text-sm text-center text-slate-400 dark:text-white/70">
                        <span> You have account? </span>
                        <span>—</span>
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-500">Login</a>
                    </div>

                </form>


            </div>


        </div>

    </div>
</x-guest-layout>
