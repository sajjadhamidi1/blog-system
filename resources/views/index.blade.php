@extends('layouts.master')
@section('title','Home Page')
@section('content')
    <h1 class="my-4">Articles
        
    </h1>

    <!-- Blog Post -->
    @foreach ($articles as $article)
    <div class="card mb-4">
        @if(!empty($article->image))
        <img src="/storage/{{ $article->image }}" alt="{{ $article->title }}" class="w-25">
        @else
        <span>عکس ندارد</span>
        @endif
        
        <div class="card-body">
           
            <h2 class="card-title">{{$article->title}}</h2>
            <p class="card-text">{{$article->body}}</p>
            <a href="articles/{{$article->slug}}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on : {{$article->created_at->format('j-F-Y')}}
           
        </div>
    </div>

    @endforeach
    

    
@endsection



