<html lang="{{ app()->getLocale() }}">
    @include('partials.link.head')
    <!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
    <body class="hold-transition skin-green-light sidebar-mini fixed link">
        @stack('body_start')

        <!-- Site wrapper -->
        <div class="wrapper">
            @include('partials.link.content')

            @include('partials.link.footer')
        </div>

        @stack('body_end')
    </body>
</html>
