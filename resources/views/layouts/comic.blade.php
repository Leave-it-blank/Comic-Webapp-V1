<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! OpenGraph::generate() !!}
    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--<script src="https://kit.fontawesome.com/9fb6a65232.js" crossorigin="anonymous"></script>
 -->
</head>
@include('inc.navbar')

<body class="text-sm " style="background-color: {{ $settings->theme_name }}; color: {{ $settings->text_meta }};">
    @include('inc.popupside')
    @include('inc.sidebar_mainpage')
    <div id="main_page_side">
        <div id="app" class="layout-row">
            <div class="" style="min-height: 770px !important;">

                @yield('content')


            </div>
        </div>
    </div>

    <!-- jQuery first,scripts js -->

    <script src="{{ asset('js/app.js') }}" defer></script>


</body>

@include('inc.footer')

</html>
