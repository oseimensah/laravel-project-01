@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto pt-24">

        <div class="w-3/5 m-auto nav-back py-4 px-8">
            <div class="w-3/4 m-auto flex px-2">
                <input type="text" class="w-4/5 body-back px-4 py-2 text-sm border-black border" name="search" placeholder="Search here..." id="search">
                <button class="w-1/5 search-back py-2 px-3 text-gray-800 text-sm uppercase hover:shadow-md hover:rounded">{{__('Search')}}</button>
            </div>
        </div>

        {{--    Articles     --}}
        <div class="mt-12 mb-8">
            <h2 class="text-xl main-text tracking-wide mt-12">Latest Articles</h2>
            <p class="hr"></p>

            <div class="mt-12">
                <div class="w-full grid grid-cols-3 gap-4">
                    @forelse($articles as $article)
                    <div class="max-w-sm rounded-b-lg shadow-lg bg-white overflow-hidden">
                        <a href="{{ route('article', $article) }}">
                            <img class="w-full" src="{{ asset('images/profile.jpg') }} " alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-base mb-2">{{ $article->title }}</div>
                                <p class="text-gray-700 text-base">{{ $article->author }}</p>
                            </div>
                        </a>

                        <div class="py-4 px-2">
                            @foreach($article->tags as $tag)
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 mx-2 my-2 text-sm font-semibold text-gray-700 mr-2">#{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    </div>
                        @empty
                        <h2>No Available Articles</h2>
                    @endforelse
                </div>
            </div>

        </div>

        <p class="text-center text-gray-500 text-xs py-12">
            &copy;2020 Acme Corp. All rights reserved.
        </p>

    </div>

@endsection
