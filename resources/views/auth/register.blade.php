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
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
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
    <div class="flex flex-col h-screen justify-center items-center">


        <div class="max-w-sm mx-auto md:px-10 p-4 w-full">

            <div>
                <!-- logo -->
                <div class="flex justify-center mb-12">
                    <img src="{{ asset('assets/images/logo.html') }}" alt=""
                        class="w-auto h-16 shrink-0 bg-fuchsia-100 px-3 rounded-2xl p-2.5">
                </div>
                <x-validation-errors class="mb-4" style="color: red"/>
                <form method="POST" action="{{ route('register') }}" class="space-y-3">
                    @csrf
                    <input type="hidden" name="utype" value="byr">
                    <input class="!w-full" id="username" name="name" type="text" autofocus=""
                        placeholder="Full Name" required="">
                    <input class="!w-full" id="name" name="email" type="email" autofocus=""
                        placeholder="Email" required="">
                    <input class="!w-full" id="email" name="phone_number" type="tel" autofocus=""
                        placeholder="Phone Number" required="">
                    <input class="!w-full" id="password" name="password" type="password" autofocus=""
                        placeholder="Password" required="">
                        <input class="!w-full" id="password" name="password_confirmation" type="password" autofocus=""
                        placeholder="Confirm Password" required="">

                    <a href="#!" class="hidden">
                        <div class="text-sm text-right text-gray-400 py-4"> Terms and conditions </div>
                    </a>

                    <button type="submit"
                        class="font-medium w-full rounded-lg bg-slate-900 py-1.5 px-4 text-white h-[38px] active:scale-[0.97] transition-all duration-150">
                        <span>Get Started</span> </button>

                    <div class="space-x-2 text-sm text-center text-slate-400 dark:text-white/70">
                        <span> I have account? </span>
                        <span>—</span>
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-500">Login</a>
                    </div>

                </form>


            </div>


        </div>

    </div>
</x-guest-layout>
