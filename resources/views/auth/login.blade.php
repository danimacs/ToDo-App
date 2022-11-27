<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400" />

<style>
    html, body {
        background-color: #F5F5F5
    }

    .google-btn {
        margin: 25px;
        width: 80%;
        min-width: 184px;
        max-width: 184px;
        height: 42px;
        background-color: #fcfcfc;
        border-radius: 2px;
        box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .2);
        cursor: pointer;
        cursor: hand;
        align-self: center;
        user-select: none;
        transition: all 400ms ease 0s;
        display: flex;
    }
    .google-btn .google-icon-wrapper {
        position: absolute;
        margin-top: 1px;
        margin-left: 1px;
        width: 40px;
        height: 40px;
        border-radius: 2px;
        user-select: none
    }
    .google-btn .google-icon-svg {
        position: absolute;
        margin-top: 11px;
        margin-left: 11px;
        width: 18px;
        height: 18px;
        user-select: none
    }
    .google-btn .btn-text {
        float: right;
        margin: 11px 14px 40px 40px;
        color: #757575;
        font-size: 14px;
        letter-spacing: .2px;
        font-family: Roboto;
        user-select: none
    }
    .google-btn:hover {
        box-shadow: 0 3px 8px rgba(117, 117, 117, .5);
        user-select: none
    }
    .google-btn:active {
        box-shadow: 0 1px 1px #757575;
        background: #F8F8F8;
        color: #fff;
        user-select: none
    }

    .normal-btn {
        margin: 25px;
        width: auto;
        display: inline-block;
        min-width: auto;
        max-width: 184px;
        height: 42px;
        background-color: #fcfcfc;
        border-radius: 2px;
        box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .2);
        cursor: pointer;
        cursor: hand;
        align-self: center;-webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: all 400ms ease 0s
    }
    .normal-btn .btn-text {
        float: left;
        margin: 11px 14px 11px 14px;
        color: #757575;
        font-size: 14px;
        letter-spacing: .2px;
        font-family: Roboto;
        user-select: none
    }
    .normal-btn:hover {
        box-shadow: 0 3px 8px rgba(117, 117, 117, .5);
        user-select: none
    }
    .normal-btn:active {
        box-shadow: 0 1px 1px #757575;
        background: #F8F8F8;
        color: #fff;
        user-select: none
    }
</style>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

        <div class="google-btn" style="max-width: 192px;">
            <div class="google-icon-wrapper">
                <img class="google-icon-svg" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
            </div>
            <p class="btn-text"><b><a href="{{ route('google-auth') }}">Continue with Google</a></b></p>
        </div>

        <div class="google-btn" style="max-width: 192px;">
            <div class="google-icon-wrapper">
                <img class="google-icon-svg" src="https://cdn-icons-png.flaticon.com/512/25/25231.png"/>
            </div>
            <p class="btn-text"><b><a href="{{ route('github-auth') }}">Continue with GitHub</a></b></p>
        </div>
        
    </x-auth-card>
</x-guest-layout>
