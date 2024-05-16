@extends('layouts.master')
@section('content')

    <h2 class="text-3xl text-center font-extrabold py-3">Create Article</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/articles/create" method="post" class="w-full flex align-content-center px-20 gap-4 flex-col" enctype="multipart/form-data">
        @csrf
        <div  class="flex justify-center flex-col align-middle gap-3">
            <label class="font-bold text-3xl" for="title">title</label>
            <input type="text" name="title"   class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-primary-600 focus:border-primary-600 block">
        </div>
        <div class="flex justify-center flex-col align-middle gap-3">
        <input type="file" name="image" id="image" class="form-control-file" >
        </div>
        <div class="flex justify-center flex-col align-middle gap-3">
            <label for="body" class="font-bold text-3xl">body </label>
            <textarea name="body" id="body"  col="100" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-primary-600 focus:border-primary-600 block"></textarea>
        </div>
        <button  class="btn bg-orange-500 px-3 py-1 text-white text-bold">Create Post</button>
    </form>
@endsection
