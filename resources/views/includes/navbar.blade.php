
<nav id="header" class="fixed w-full z-30 top-0 text-white shadow-sm nav-back p-2">
    <div class="w-full container mx-auto flex-wrap">
        <div class="w-1/5 float-left pl-4 flex items-center pt-1">
            <a href="/" class="toggleColor text-white no-underline hover:no-underline font-bold text-xl">
                <h2>Laravel<span class="text-2"> Seven</span></h2>
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        <div class="w-4/5 float-right">
            <div class="w-3/5 float-left ml-16 flex justify-end items-end text-center">
                <ul class="mt-2 navi">
                    <li class="inline-block {{ request()->path() === '/' ? 'active' : '' }}"><a href="{{ route('home') }}" class="text-sm font-bold uppercase px-3 py-2 text-2">home</a></li>
                    <li class="inline-block {{ request()->path() === 'articles' ? 'active' : '' }}"><a href="{{ route('articles') }}" class="text-sm font-bold uppercase px-3 py-2 text-2">articles</a></li>
                    <li class="inline-block"><a href="" class="text-sm font-bold uppercase px-3 py-2 text-2">books</a></li>
                    <li class="inline-block"><a href="" class="text-sm font-bold uppercase px-3 py-2 text-2">blog</a></li>
                </ul>
            </div>

            <div class="w-1/5 float-right hidden lg:block bg-white lg:bg-transparent text-black z-20">
                <div class="lg:flex justify-end flex-1 items-center my-2">
                    <!-- Authentication Links -->
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <div class="dropdown inline-block relative group">
                                    <button class="flex items-center cursor-pointer px-2 text-gray-400">
                                        <span class="h-10 w-10 overflow-hidden rounded-full border-2 border-gray-600 focus:outline-none focus:border-white mr-1">
                                            <img class="h-full w-full object-cover" src="{{ asset('images/img_avatar.png') }}" alt="Your avatar">
                                        </span>
                                        {{ Auth::user()->name }}
                                    </button>
                                    <ul class="dropdown-menu absolute hidden mt-1" >
                                        <li class="">
                                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="#">Profile</a>
                                        </li>
                                        <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="#">Help &amp; Support</a></li>
                                        <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="#">Settings &amp; Privacy</a></li>
                                        <li class="">
                                            <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a class="text-white font-bold text-xs uppercase py-3 px-4" href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                    <a class="mx-auto background-2 text-gray-800 font-bold text-xs uppercase rounded-full py-3 px-4 shadow-lg mr-8 cursor-pointer" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
{{--                <ul class="list-reset lg:flex justify-end flex-1 items-center">--}}
                    <!-- Authentication Links -->
{{--                    @guest--}}
{{--                        @if(request()->path()=== 'login')--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @elseif (request()->path()=== 'register')--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @endif--}}

{{--                    @else--}}

{{--                        <div class="">--}}
{{--                            <div class="dropdown inline-block relative group ">--}}
{{--                                <button class="flex items-center cursor-pointer py-1 px-2 text-gray-400">--}}
{{--                                <span class="h-10 w-10 overflow-hidden rounded-full border-2 border-gray-600 focus:outline-none focus:border-white mr-1">--}}
{{--                                    <img class="h-full w-full object-cover" src="{{ asset('images/profile.jpg') }}" alt="Your avatar">--}}
{{--                                </span>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </button>--}}
{{--                                <ul class="dropdown-menu absolute hidden" >--}}
{{--                                    <li class="">--}}
{{--                                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="#">Profile</a>--}}
{{--                                    </li>--}}
{{--                                    <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="#">Help &amp; Support</a></li>--}}
{{--                                    <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="#">Settings &amp; Privacy</a></li>--}}
{{--                                    <li class="">--}}
{{--                                        <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap text-base border-b-2" href="{{ route('logout') }}"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                       document.getElementById('logout-form').submit();">{{ __('Logout') }}--}}
{{--                                        </a>--}}
{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
            </div>

        </div>
    </div>
    </nav>

{{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm gradient">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            {{ config('app.name', 'Laravel') }}--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse"--}}
{{--                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav mr-auto">--}}

{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    @if(request()->path()=== 'login')--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @elseif (request()->path()=== 'register')--}}
{{--                        @if (Route::has('login'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @endif--}}

{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}