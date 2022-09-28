<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        @include('includes.header')
        <div class="boxed">
            <div id="content-container">
                @include('includes.page-title')
                <div id="page-content">
                    {{ $slot }}
                </div>

            </div>
            @include('includes.aside')

            @include('includes.sidebar')


        </div>
        @include('includes.footer')

    </div>
    @livewireScripts
    <script src="{{ Vite::asset('resources/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/bootstrap.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/nifty.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/nifty-demo.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/morris-js/morris.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/morris-js/raphael-js/raphael.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/dashboard.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/custom.js') }}"></script>
<script>
     window.Lockscreen = {
        locked: {{ session()->get('lockscreen', false) }},
        route: '{{ url('/lockscreen') }}',
      };
</script>
</body>

</html>
