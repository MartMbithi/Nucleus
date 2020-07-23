<html lang="{{ app()->getLocale() }}">
    @include('partials.admin.head')
    <!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
    @push('css')
    <!-- Bootstrap 3 print fix -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap3-print-fix.css?v=1.2') }}">
    @endpush

    <body onload="window.print();" class="print-width">
        @stack('body_start')

        @yield('content')

        @stack('body_end')
    </body>
</html>
