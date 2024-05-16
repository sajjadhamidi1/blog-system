@extends('layouts.master')
@section('title','contact us')
@include('layouts.navigation')
@section('content')
    <div class="bg-light p-4">
    <h2 class="text-center p-4">Contact Page</h2>
    <ul class="list-group ">
        <li class="list-group-item  d-flex align-items-center " style="font-size: 30px;padding-left:30px"> phone:+989366083064</li>
        <li class="list-group-item  d-flex align-items-center " style="font-size: 30px;padding-left:30px">email:stranimation@gmail.com</li>

    </ul>
    </div>
    <!-- /.row -->
@endsection

@section('sidebar')
    @parent

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">About Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>
@endsection
