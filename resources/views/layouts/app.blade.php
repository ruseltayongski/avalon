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
    
    @yield('css')
</head>
<body>
    <div id="app">
        @include('layouts._header')
        @yield('content')
        @include('layouts._footer')
    </div>
    @include('layouts._themeSwitcher')
</body>
@yield('js')
<script>
    function triggerModal() {
        var myElementCheckoutmodal = document.getElementById('checkoutmodal');
        myElementCheckoutmodal.classList.remove('opacity-0');
    }
</script>
</html>
