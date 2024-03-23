@extends('layouts.master')


@section('content')
    <h1 class="my-4">Articles
        
    </h1>

    <!-- Blog Post -->
    @foreach ($articles as $article)
    <div class="card mb-4">
        {{-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> --}}
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



