<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" href="{{asset('uploads')}}/logo.jpg" type="image/gif" sizes="16x16"> --}}
    <title> @yield('title')</title>

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
    <link href="{{asset('lib')}}/dropify/dist/css/dropify.css" rel="stylesheet" >
    <script src="{{asset('local/public/js/app.js')}}"></script>



    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('template')}}/css/slim.css">

</head>
<body>

    <div id="app">
            @include('layouts.menu')

            <div class="slim-mainpanel">
                <router-view></router-view>
                {{-- <example-component></example-component> --}}
                {{-- @yield('content') --}}
    
            </div>
    
            @include('layouts.footer')
    </div>
        



  <!-- jQuery 3 -->
    <script src="{{asset('lib')}}/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('lib')}}/bower_components/select2/dist/js/select2.full.min.js"></script>

    <script src="{{asset('lib')}}/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="{{asset('lib')}}/printThis/printThis.js"></script>
    <script src="{{asset('lib')}}/dropify/dist/js/dropify.js"></script>
    <script src="{{asset('template')}}/lib/popper.js/js/popper.js"></script>
    <script src="{{asset('template')}}/lib/bootstrap/js/bootstrap.js"></script>
    <script src="{{asset('template')}}/lib/Export/dist/jquery.table2excel.js"></script>

    <script src="{{asset('template')}}/js/slim.js"></script>
    <script src="{{asset('template')}}/js/ResizeSensor.js"></script>


    @yield('scripts')
</body>
</html>
