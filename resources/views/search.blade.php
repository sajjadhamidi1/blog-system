@extends('layouts.master')
@section('title','Home Page')
@include('layouts.navigation')
@section('content')





    <div class="flex bg-orange-400 mb-5 justify-center  text-white container p-3">
        <h2 class="text-3xl">Found <span class="bg-gray-900 rounded-full p-1 text-center">{{$results->count()}}</span> Article</h2>
    </div>
    <div class="mx-2 mt-6 flex flex-row flex-wrap justify-center gap-3 w-full">
        @foreach ($results as $article)
            <div class="w-1/4 rounded flex justify-content-center flex-col shadow-lg">
                <a href="articles/{{ $article->slug }}">
                    <img class="w-full h-25 aspect-square hover:opacity-95 transition duration-75 ease-in-out" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
                </a>
                <div class="px-10 py-3">
                    <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                    <p class="text-gray-700 text-base" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                        {{ $article->body }}
                    </p>
                    <div class="py-7">
                        <a href="articles/{{ $article->slug }}" class="btn text-white border-orange-700 px-3 py-2 rounded bg-orange-500">Read More &rarr;</a>
                        <span>{{ $article->created_at->format('j-F-Y') }}</span>
                    </div>
                </div>
            </div>


        @endforeach
    </div>

    @if(isset($error))

        <div class=" flex flex-row  justify-center align-middle " style="height: 100vh">
            <h3 class="text-5xl">{{ $error }}</h3>
        </div>

    @endif

@endsection

