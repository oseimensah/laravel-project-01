@extends('layouts.app')

@section('content')

<div class="w-full h-screen flex justify-center items-center bg-gray-300">
    <div class="max-w-sm w-3/4 m-auto lg:max-w-full lg:flex rounded shadow-lg h-auto">
        <div class="lg:h-auto lg:w-2/4 flex-none bg-cover lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
             style="background-image: url({{ asset('images/banner.jpg') }})" title="Woman holding a mug">
        </div>

        <div class="border-r w-2/4 border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">

                <div class="w-full mb-2 flex justify-between">
                    <p class="flex items-center">
                        <svg class="fill-current text-gray-800 w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                        </svg>
                        <span class="text-xl uppercase font-bold text-gray-600">{{ __('Login') }}</span>
                    </p>
                    <span class="mr-8">@if (Route::has('register'))
                            <a class="text-blue-600 font-bold hover:text-gray-500" href="{{ route('register') }}">Register</a>
                        @endif</span>
                </div>

                <p class="text-gray-700 text-2xl capitalize tracking-wide mb-6">welcome, login here: </p>

                <form method="POST" action="{{ route('login') }}" class="mr-2 pt-8">
                    @csrf
                    <div class="w-full overflow-hidden">
                        <div class="w-1/4 float-left">
                            <label class="block text-gray-500 font-bold md:text-left py-2 md:mb-0 pr-4" for="email">
                                {{ __('Email') }}
                            </label>
                        </div>

                        <div class="w-3/4 float-right">
                            <input class="@error('email') is-invalid @enderror bg-gray-200 appearance-none border-2 border-gray-200 items-start rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                   id="email" name="email" type="email" value="{{ old('email')}}" placeholder="corndeo@example.com">
                            @error('email')
                            <span class="text-red-500 text-xs italic" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear-both"></div>

                    <div class="w-full pt-5 overflow-hidden">
                       <div class="w-1/4 float-left">
                           <label class="block text-gray-500 font-bold md:text-left py-2 md:mb-0 pr-4" for="password">{{ __('Password') }}</label>
                       </div>

                        <div class="w-3/4 float-right">
                            <input id="password" type="password"
                                   class="@error('password') is-invalid @enderror bg-gray-200 appearance-none border-2 border-gray-200 items-start rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                   name="password" required autocomplete="current-password" placeholder="***************************">
                            @error('password')
                            <span class="text-red-500 text-xs italic" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="w-2/4 flex justify-center items-center my-6 m-auto">
                        <label class="block text-gray-500 font-bold">
                            <input class="mr-1 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="text-sm"> {{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <div class="flex justify-between mx-10">
                        <button type="submit" class="shadow-sm background-2 text-white hover:bg-blue-800 hover:text-white hover:shadow-lg font-bold py-2 px-4 rounded focus:shadow-outline focus:outline-none">{{ __('Login') }}</button>
                        <div class="pt-2">
                            @if (Route::has('password.request'))
                                <a class="block text-gray-500 font-bold hover:text-blue-600" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
