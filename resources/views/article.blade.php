@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto pt-24">
    {{--    Articles     --}}
    <div class="mt-10 mb-8">
        <div class="w-full overflow-hidden">
            <div class="title float-left">
                <h2 class="text-xl main-text tracking-wide ml-4">Articles</h2>
                <p class="hr ml-4"></p>
            </div>
                <a href="{{ route('article.new') }}" class="bg-gray-200 float-right rounded-full px-5 py-1 mx-2 my-2 text-sm font-semibold capitalize text-gray-700 hover:text-gray-300 hover:bg-gray-700 transition duration-300 ease-in-out">Create new article</a>
        </div>

        <div class="mt-12">
            <div class="w-full grid grid-cols-3 gap-4">
                @forelse($articles as $article)
                    <div class="max-w-sm rounded-b-lg shadow-lg bg-white overflow-hidden">
                        <img class="w-full" src="{{ asset('images/profile.jpg') }} " alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <a href="{{ route('article', $article) }}" class="font-bold text-base mb-2">{{ $article->title }}</a>
                            <p class="text-gray-700 text-base">{{ $article->author }}</p>
                        </div>
                        <div class="py-4 px-2">
                            @foreach($article->tags as $tag)
                                <a href="{{ route('articles',['tag' => $tag->name]) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 mx-2 my-2 text-sm font-semibold text-gray-700 mr-2">#{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    @empty
                    <p>No Available Articles</p>
                @endforelse
            </div>
        </div>

    </div>

    <p class="text-center text-gray-500 text-xs py-12">
        &copy;2020 Acme Corp. All rights reserved.
    </p>
</div>
@endsection