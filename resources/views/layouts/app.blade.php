<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1"> --}}
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="x-icon" href="{{ asset('/images/avalon-logo.png') }}">


    <title>{{ config('app.name', 'Avalon House') }}</title>

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
            background-color: #011523;
            z-index: 1000;
         
        }

        .avalon-logo {
            width: 63%;
        }

       
    </style>
    
    @yield('css')
</head>
<body>
    <?php
        use App\Models\Carts;
        $carts = Carts::leftJoin("services","services.id","cart.service_id")->limit(0)->get();
    ?>
    @include('layouts._loading-container')
    <div id="app" x-data='{ carts: @json($carts) }'>
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
    window.addEventListener('load', function() {
        var loadingContainer = document.getElementById('loadingContainer');
        loadingContainer.style.display = 'none';
        var heroTitle = document.getElementById('hero-title');
        if(heroTitle) {
            heroTitle.classList.add("animate-fade-up");
        }
        var heroIconDelay = 0;
        for(var i=0; i<=13; i++) {
            var heroIcon = document.getElementById('hero-icon'+i);
            if(heroIcon) {
                heroIcon.classList.add("animate-fade-right");
                heroIcon.classList.add("animate-delay-"+heroIconDelay);
                heroIconDelay += 25;
            }
        }
    });
</script>
</html>
