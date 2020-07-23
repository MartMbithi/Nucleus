<html lang="{{ app()->getLocale() }}">
    @include('partials.customer.head')
    <!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
    <body class="hold-transition skin-green-light sidebar-mini fixed">
        @stack('body_start')

        <!-- Site wrapper -->
        <div class="wrapper">
            @include('partials.customer.header')

            @include('partials.customer.menu')

            @include('partials.customer.content')

            @include('partials.customer.footer')
        </div>

        @stack('body_end')
    </body>
</html>
