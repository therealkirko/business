<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- plugins -->
        <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
    @if (Auth()->user()->mode)
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
    @else
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    @endif
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
@if (Auth()->user()->mode)
    <body class="left-side-menu-dark">
@else
    
    <body>
@endif
        <div id="wrapper">
            @include('layouts.shared.topbar')
            @include('layouts.shared.sidebar')
            <div class="content-page">
                <div class="content">
                    {{ $slot }}
                </div>
                @include('layouts.shared.footer')
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- optional plugins -->
        <script src="{{ asset('assets/libs/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

        <!-- page js -->
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

    </body>
</html>
