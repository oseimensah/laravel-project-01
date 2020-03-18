@extends('layouts.app')

@section('content')
    <div class="w-full h-screen bg-gray-400">
        <div class="w-2/4 m-auto h-screen flex justify-center items-center">
            <div class="w-full max-w-xs">
                <div class="w-full bg-gray-300 py-3 pl-6 font-semibold text-sm uppercase tracking-wide">{{ __('Reset Password') }}</div>
                @if (session('status'))
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-6" role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm">{{ session('status') }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('password.email') }}" >
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-4" for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('email') is-invalid border-red-500 @enderror"
                                       name="email" value="{{ old('email') }}"
                                       required autocomplete="email" autofocus
                                       placeholder="{{ __('Email Address') }}">
                                @error('email')
                                <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <button type="submit" class="w-full shadow-sm background-2 rounded p-2 mt-2 transition duration-500 ease-in-out mb-4 hover:shadow-md hover:bg-blue-800 text-white">
                                {{ __('Send Password Reset Link') }}
                            </button>

                        </form>
                @endif
                <p class="text-center text-gray-500 text-xs">
                    &copy;2020 Acme Corp. All rights reserved.
                </p>
            </div>

        </div>
    </div>
@endsection