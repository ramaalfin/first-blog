<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
        @vite(['resources/css/app.css','resources/js/app.js'])
        @include('frontend.includes.style')
    @stack('addon-style')


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('../assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('../assets/js/config.js') }}"></script>

</head>
<body>
    @include('frontend.includes.header')
    @include('frontend.includes.nav')
    @yield('content')
    @include('frontend.includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
        @include('frontend.includes.script')
    @stack('addon-script')
</body>
</html>
