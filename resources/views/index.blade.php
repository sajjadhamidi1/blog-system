@extends('layouts.master')
@section('title','Home Page')
@include('layouts.navigation')
@section('content')




    <!-- Blog Post -->
    <div class=" mx-2 mt-6   flex flex-row flex-wrap justify-center gap-3 w-full ">
    @foreach ($articles as $article)
    <div class=" w-1/4  rounded  flex justify-content-center flex-col shadow-lg">
            <a href=" articles/{{$article->slug}}">
                <img class="w-full h-25 aspect-square hover:opacity-95 transition duration-75 ease-in-out" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
            </a>

        <div class="px-10 py-3">
            <div class="font-bold text-xl mb-2">{{$article->title}}</div>
            <p class="text-gray-700 text-base " style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                {{$article->body}}

                </p>
            <div class=" py-7">
                <a href="articles/{{$article->slug}}" class="btn  text-white border-orange-700 px-3  py-2 rounded bg-orange-500">Read More &rarr;</a>
                <span>{{$article->created_at->format('j-F-Y')}}</span>
            </div>

        </div>
    </div>

    @endforeach
    </div>



@endsection



