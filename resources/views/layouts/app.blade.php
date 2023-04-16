<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('../assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('../assets/js/config.js') }}"></script>
</head>
<body>
    {{-- navbar --}}
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu Aside-->
            @include('includes.aside')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Nav -->
                @include('includes.nav')
                <!-- / Nav -->
                @yield('content')
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>
