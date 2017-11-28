<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">

    @include('front.styles')
    @yield('styles')
    @yield('meta')
</head>
<body class="color-bg">

    <div class="main-wrapper">
        {{--@include('front.header')--}}
        @yield('header')

        @yield('content')

        {{--@include('front.footer')--}}
        @yield('footer')
    </div>
    @include('front.scripts')
    @include('front.metriks')
    @yield('scripts')
    @yield('metriks')


</body>
</html>