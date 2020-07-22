<!--/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/-->
<html lang="{{ app()->getLocale() }}">
    @include('partials.bill.head')

    <body onload="window.print();">
        @stack('body_start')

        <!-- Content Wrapper. Contains page content -->
        <div class="wrapper" style="margin-left: 0; page-break-after: always;">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @stack('body_end')
    </body>
</html>