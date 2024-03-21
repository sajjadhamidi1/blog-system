@extends('layouts.master')


@section('content')
    <h2>All Article</h2>
    <form action="/admin/articles/create" method="GET">
    <button class="btn btn-success">+ New Article</button>
    </form>
    <table class="table ">
        <thead></thead>
        <tr>
        <th>id</th>
        <th>title</th>
        <th>opration</th>
    </tr>

    <tbody>
        @foreach ($articles as $article)
            
        
        <tr class="w-100">
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td style="display:flex; gap:10px;">

                <form action="/admin/articles/{{$article->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">deleate</button>
                </form>

            </td>

        </tr>

        @endforeach
    </tbody>

    </table>
@endsection
