{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    @section('title')
        Login
    @endsection
    <div class="flex flex-col h-screen justify-center items-center">


        <div class="max-w-sm mx-auto md:px-10 p-4 w-full">


            <div uk -scrollspy="target: > * > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

                <!-- logo -->
                <div class="flex justify-center mb-12"
                    uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                    <img src="{{ asset('assets/images/logo.html') }}" alt=""
                        class="w-auto h-16 shrink-0 bg-fuchsia-100 px-3 rounded-2xl p-2.5">
                </div>
                <x-validation-errors class="mb-4" style="color: red" />

                <form method="POST" action="{{ route('login') }}" class="space-y-3"
                    uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                    @csrf
                    <input class="!w-full" id="email" name="email" type="email" autofocus=""
                        placeholder="Email" required="">
                    <input class="!w-full" id="email" name="password" type="password" autofocus=""
                        placeholder="Password" required="">

                    <a href="{{ route('password.request') }}" class="hidden">
                        <div class="text-sm text-right text-gray-400 py-4"> Forgot password </div>
                    </a>

                    <button type="submit"
                        class="font-medium w-full rounded-lg bg-slate-900 py-1.5 px-4 text-white h-[38px] active:scale-[0.97] transition-all duration-150">
                        <span>Sign in</span> </button>

                    <div class="flex gap-3 justify-center text-2xl py-5 text-slate-500">

                        <a href="#"> <ion-icon name="logo-facebook"></ion-icon> </a>
                        <a href="#"> <ion-icon name="logo-google"></ion-icon> </a>
                        <a href="#"> <ion-icon name="logo-apple"></ion-icon> </a>

                    </div>

                    <div class="space-x-2 text-sm text-center text-slate-400 dark:text-white/70">
                        <span> No account? </span>
                        <span>—</span>
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-500">Join now</a>
                    </div>

                </form>


            </div>


        </div>

    </div>
</x-guest-layout>
