@extends('layouts.app')

@section('content')
    <div class="w-full h-full bg-gray-400 pt-24">
            <div class="w-3/4 m-auto h-full flex justify-center items-center">
                <div class="w-full max-w-md">
                    <div class="w-full bg-gray-300 py-3 pl-6 text-gray-700 font-bold text-xs uppercase tracking-wide">{{ __('Create New') }}</div>
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('article.create') }}" >
                            @csrf
                            <div class="mb-1">
                                <label class=" hidden block text-gray-700 text-sm font-bold mb-4" for="user">Created By: {{ Auth::user()->name }}</label>
                                <input id="user" type="text" class="hidden shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                       name="user_id" value="{{Auth::user()->id}}">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-4" for="title">{{ __('Title') }}</label>
                                <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('title') is-invalid border-red-500 @enderror"
                                       name="title" value="{{ old('title') }}" autocomplete="title" placeholder="{{ __('Article Title') }}">
                                @error('title')
                                <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-4" for="body">{{ __('Article Body') }}</label>
                                <textarea id="body" type="text" class="h-32 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('body') is-invalid border-red-500 @enderror"
                                          name="body" placeholder="{{ __('Some text for the article') }}">{{ old('body') }}</textarea>
                                @error('body')
                                <span class="text-red-500 text-xs italic" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="w-full flex justify-start">
                                <label class="inline-block uppercase py-4 pr-3 tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Tag
                                </label>
                                <div class="relative inline-block w-full">
                                    <select class="block appearance-none @error('tags')border-red-500 @enderror w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            multiple name="tags[]" id="grid-state">
                                        @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>a
                                        @endforeach
                                    </select>
                                    @error('tags')
                                        <span class="text-red-500 text-xs italic" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="w-full shadow-sm background-2 rounded p-2 mt-8 transition duration-500 ease-in-out mb-2 hover:shadow-md hover:bg-blue-800 text-white">
                                {{ __('Create Article') }}
                            </button>

                        </form>
                    <p class="text-center text-gray-500 text-xs pb-6">
                        &copy;2020 Acme Corp. All rights reserved.
                    </p>
                </div>

            </div>
    </div>

@endsection