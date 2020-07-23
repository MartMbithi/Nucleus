<html lang="{{ app()->getLocale() }}">
    @include('partials.modules.head')
    <!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
    <body class="hold-transition {{ setting('general.admin_theme', 'skin-green-light') }} sidebar-mini fixed">
        @stack('body_start')

        <!-- Site wrapper -->
        <div class="wrapper">
            @include('partials.admin.header')

            @include('partials.admin.menu')

            @include('partials.admin.content')

            @include('partials.admin.footer')
        </div>

        @stack('body_end')
    </body>
</html>
