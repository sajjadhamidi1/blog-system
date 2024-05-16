@extends('layouts.master')
@section('content')
    <h2 class="text-3xl text-center font-extrabold py-3">All Article</h2>
    <div class="p-6">
    <a href="/" class="  btn bg-orange-500 text-white p-3 rounded">Show Blog</a>
    </div>
    <form action="/admin/articles/create"  method="GET" class="p-6">
    <button class="btn bg-green-500 text-white py-3 px-2 rounded">New Article</button>
    </form>
    <div class="container  px-5 py-3">
    <table class="table-fixed min-w-full  " >
        <thead></thead>
        <tr class="">
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-orange-200   text-gray-700 tracking-wider">ID</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-orange-200   text-gray-700 tracking-wider">Title</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-orange-200   text-gray-700 tracking-wider">image</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-orange-200   text-gray-700 tracking-wider">Operation</th>
    </tr>

    <tbody>
        @foreach ($articles as $article)


        <tr class=" border-2 border-gray-700" >
            <td class=" border-x-2 border-gray-700">{{$article->id}}</td>
            <td class=" border-x-2 border-gray-700 ">{{$article->title}}</td>
            <td class=" border-x-2 border-gray-700 "><img class="w-48 h-48 aspect-square p-3" src="{{asset($article->image)}}" alt=""></td>


            <td class=" border-x-2 border-gray-700 flex justify-center gap-5">

                <form action="/admin/articles/{{$article->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn  rounded px-3 py-1 my-3 text-green-50" style="background: red;">delete</button>
                </form>

                <a href="{{ route('editarticle', ['article' => $article->id]) }}" class="btn  rounded px-3 py-1 my-3 text-green-50 bg-blue-600">Edit Article</a>
            </td>

        </tr>

        @endforeach
    </tbody>

    </table>
    </div>
@endsection
