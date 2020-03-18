@extends('layouts.app')

@section('content')

    <div class="w-full h-screen bg-gray-400">
        <div class="w-2/4 m-auto h-screen flex justify-center items-center">
            <div class="w-full max-w-xs">
                <div class="w-full bg-gray-300 py-3 pl-6 font-semibold text-sm uppercase tracking-wide">{{ __('Reset Password') }}</div>

                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('password.update') }}" >
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label class="block text-gray-700 text-center text-sm font-bold mb-4" for="email">{{$email }}</label>
                        <input id="email" type="email" class="hidden shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                               name="email" value="{{ $email ?? old('email') }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('password') is-invalid border-red-500 @enderror"
                               name="password" autocomplete="new-password" required  autofocus placeholder="{{ __('***************') }}">
                        @error('password')
                        <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                               name="password_confirmation" autocomplete="new-password" required  placeholder="{{ __('***************') }}">
                    </div>

                    <button type="submit" class="w-full shadow-sm background-2 rounded p-2 mt-2 transition duration-500 ease-in-out mb-4 hover:shadow-md hover:bg-blue-800 text-white">
                        {{ __('Reset Password') }}
                    </button>

                </form>
                <p class="text-center text-gray-500 text-xs mt-2">
                    &copy;2020 Acme Corp. All rights reserved.
                </p>
            </div>

        </div>
    </div>

@endsection
