@extends('layouts.master')
@section('title','Article')
@include('layouts.navigation')
@section('content')



    <!-- Blog Post -->


        <div class="card m-4">
            <img class="w-1/4 aspect-square rounded" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
            <div class="card-body">



                <h2 class="text-2xl font-extrabold py-3">{{ $article->title}}</h2>
                <hr class="my-1 border border-3 border-orange-700 bg-orange-500">

                <p class="text-justify">{{ $article->body }}</p>
                <hr class="my-1 border border-3 border-orange-700 bg-orange-500">

            </div>
            <div class=" text-muted">

                Posted on
                <div class="flex flex-row flex-nowrap">
                     <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
</svg>{{$article->created_at->format('j-F-Y')}}</span>
                </div>


            </div>
        </div>
        @include('comments')
@endsection
