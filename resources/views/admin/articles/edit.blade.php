@extends('layouts.master')


@section('content')
    <h2 class="text-3xl text-center font-extrabold py-3">edit Article</h2>


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('update.article', ['article' => $article->id]) }}" enctype="multipart/form-data" class="w-full flex align-content-center px-20 gap-4 flex-col" method="post">        @csrf
        @method('PUT')
        <div class="flex justify-center flex-col align-middle gap-3">
            <label class="font-bold text-3xl" for="title">title</label>
            <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-primary-600 focus:border-primary-600 block   " value="{{ $article->title }}">
        </div>
        <div class="flex justify-center flex-col align-middle gap-3">
            <input type="file" name="image" id="image" class="form-control-file" >
        </div>
        <div class=" flex justify-center flex-col align-middle gap-3">
            <label class="font-bold text-3xl" for="body">body </label>
            <textarea name="body" col="100" rows="10" id="body" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $article->title }}">{{ $article->body }}</textarea>
        </div>
        <button class="btn bg-orange-500 px-3 py-1 text-white">update</button>
    </form>
@endsection
