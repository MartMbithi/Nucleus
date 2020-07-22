<html lang="{{ app()->getLocale() }}">
    @include('partials.invoice.head')
    <!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
    <body onload="window.print();">
        @stack('body_start')

        @yield('content')

        @stack('body_end')
    </body>
</html>
