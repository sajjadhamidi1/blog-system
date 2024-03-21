@extends('layouts.master')


@section('content')
    <h1 class="my-4 text-center">Articles</h1>
    <!-- Blog Post -->
    @foreach ($articles as $article)
    <div class="card mb-4">
        {{-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> --}}
        <div class="card-body">
            <h2 class="card-title">{{$article->title}}</h2>
            <p class="card-text">{{$article->body}}</p>
            {{-- <a href="#" class="btn btn-primary">Read More &rarr;</a> --}}
        </div>
    @endforeach
@endsection