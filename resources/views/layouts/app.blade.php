<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Avalon') }}</title>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/js/theme-switcher.js'])

    <style>
        .loading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 1);
            z-index: 1000;
        }
    </style>
    
    @yield('css')
</head>
<body>
    @include('layouts._loading-container')
    <div id="app">
        @include('layouts._header')
        @yield('content')
        {{-- @include('layouts._footer') --}}
    </div>
    @include('layouts._themeSwitcher')
</body>
@yield('js')
<script>
    function triggerModal() {
        var myElementCheckoutmodal = document.getElementById('checkoutmodal');
        myElementCheckoutmodal.classList.remove('opacity-0');
    }
    window.addEventListener('load', function() {
        var loadingContainer = document.getElementById('loadingContainer');
        loadingContainer.style.display = 'none';
    });
</script>
</html>
