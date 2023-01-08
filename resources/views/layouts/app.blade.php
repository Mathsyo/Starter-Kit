<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <style>[x-cloak] { display: none !important; }</style>
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/scss/app.scss'])
        @stack('styles')

        <!-- Scripts -->
        @livewireScripts
        @livewire('notifications')
        @vite('resources/js/app.js')
        @stack('scripts')
    </head>

    <body class="antialiased">
        @include('layouts.navigation')

        @hasSection('title')
            <div class="bg-light shadow-sm">
                <div class="container">
                    <h5 class="py-3 fw-light">
                        @yield('title')
                    </h5>
                </div>
            </div>
        @endif

        @yield('content')
    </body>
</html>
