<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://kit.fontawesome.com/2c20f7b9e6.js" crossorigin="anonymous"></script>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

    <div id="container" class="effect aside-float aside-bright mainnav-lg">


        @include('includes.header')
        <div class="boxed">
            <div id="content-container">
                <div id="morris-chart-network" class="hide"></div>
                <div id="page-content">
                    <livewire:offline/>
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
    <script src="{{ Vite::asset('resources/js/custom.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/nifty-demo.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/ui-modals.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/sweetalert2.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/morris-js/morris.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/morris-js/raphael-js/raphael.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/dashboard.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }} "></script>


    <script src="{{ Vite::asset('resources/plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/demo/form-wizard.js') }}"></script>
    <script src="{{ Vite::asset('resources/plugins/fooTable/dist/footable.all.min.js') }}"></script>



</body>

</html>
