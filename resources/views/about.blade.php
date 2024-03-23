@extends('layouts.master')
@section('title','contact us')
@section('content')
    <div class="bg-light continer p-4 h-100">
    <h2 class="text-center p-4">About Page</h2>
    <!-- /.row -->
    <p>I am a 27-year-old backend PHP programmer specializing in Laravel. With expertise in PHP backend development, I craft efficient and scalable solutions using Laravel framework. Passionate about creating robust applications, I continuously enhance my skills to stay at the forefront of technological advancements.</p>
</div>
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
