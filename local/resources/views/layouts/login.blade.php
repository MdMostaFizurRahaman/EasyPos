<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('lib')}}/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" >
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('lib')}}/bower_components/select2/dist/css/select2.min.css">

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- vendor css -->
    <link href="{{asset('template')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('lib')}}/font-awesome/css/all.css" rel="stylesheet" >
    <link href="{{asset('template')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('template')}}/lib/rickshaw/css/rickshaw.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('template')}}/css/slim.css">

</head>
<body>

    @yield('content')


    @yield('scripts')
</body>
</html>
