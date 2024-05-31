@php
    $mode = app()->getLocale() == 'ar' ? 'rtl' : 'normal';
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>SGCD</title>
    <link rel="icon" href="{{ asset('http://localhost:8000/assets/mediatech/rtl/images/logo_V1_page-0001.jpg') }} "
        type="image/x-icon" style="max-width: 150px; max-height: 150px;" />
    {{-- @yield("styles") --}}
    @livewireStyles
    <!-- Stylesheets -->
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/responsive.css') }}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="{{ asset('assets/mediatech/' . $mode . '/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('assets/mediatech/' . $mode . '/css/color-themes/default-theme.css') }}"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    @yield('styles')

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper @if ($mode == 'rtl') rtl @endif">

        @include('landing.layouts.Header')
        @yield('content')
        @include('landing.layouts.Footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


    @yield('scripts')
    <!--Scroll to top-->
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/owl.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/wow.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/appear.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/script.js') }}"></script>
    <script src="{{ asset('assets/mediatech/' . $mode . '/js/color-settings.js') }}"></script>

</body>

</html>
