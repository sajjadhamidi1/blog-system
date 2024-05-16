<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @yield('link')
    <link rel="stylesheet" href={{url('/css/style.css') }}>
   <style>

    </style>

</head>
<body style="overflow-x:hidden !important; ">

    @yield('content')
    @extends('layouts.footer')
</body>
</html>
