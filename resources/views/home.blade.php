<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/component.css') }}" rel="stylesheet">
        <link href="{{ asset('css/frontend/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    </head>
    <body class="home">
        <x-navbar :navbar="$navbar" />
        @yield('content')
    </body>
    <script src="{{ asset('js/jquery.slim.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</html>
