@extends('layouts.master')


@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <main class="container mt-4">
    <h2>Create Article</h2>
    <form action="/admin/articles/create" method="post" >
        @csrf
        
        <div class="form-group py-3">
            <label for="title">title :</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group py-3">
            <label for="body">body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-success w-100" style="height: 56px; font-size:25px;">send</button>
    </form>
</main>
@endsection
