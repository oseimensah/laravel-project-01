@extends('layouts.app')

@section('content')

    <div class="w-full h-full bg-gray-400 pt-24">
        <div class="w-2/4 m-auto flex justify-center items-center">
            <div class="w-full max-w-md">

                <div class="max-w-md rounded-b-lg shadow-lg bg-white overflow-hidden">
                    <div class="w-full bg-gray-600 p-4">
                        <h3 class="text-gray-300">{{ $article->title }}</h3>
                    </div>
                    <img class="w-full" src="{{ asset('images/profile.jpg') }} " alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">{{ $article->author }}</div>
                        <p class="text-gray-700 text-base">{{ $article->body }}</p>
                    </div>
                    <div class="py-4 px-2">
                        @foreach ($article->tags as $tag)
                            <a href="{{ route('articles',['tag' => $tag->name]) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 mx-2 my-2 text-sm font-semibold text-gray-700 mr-2">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>

                <p class="text-center text-gray-500 text-xs my-8">
                    &copy;2020 Acme Corp. All rights reserved.
                </p>

            </div>
        </div>
    </div>



@endsection
