<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
    @include('partials._header')
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
        @include('partials._footer')
        
    </div>
</body>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="js/vendor.min.js"></script>
<script src="js/theme.min.js"></script>
</html>
