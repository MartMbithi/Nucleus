<html lang="{{ app()->getLocale() }}">
    @include('partials.auth.head')
    <!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
    <body class="hold-transition login-page">
        @stack('body_start')

        <div class="login-box">
            @stack('login_box_start')

            <div class="login-logo">
                <img src="{{ asset('public/img/nucleus-logo-white.png') }}" alt="NucleusERP" />
            </div>
            <!-- /.login-logo -->

            <div class="login-box-body">
                <p class="login-box-msg">@yield('message')</p>

                @include('flash::message')

                @stack('login_content_start')

                @yield('content')

                @stack('login_content_end')
            </div>
            <!-- /.login-box-body -->

            <div class="login-box-footer">
                {{ trans('footer.powered') }}: <a href="{{ trans('footer.link') }}" target="_blank">{{ trans('footer.software') }}</a>
            </div>
            <!-- /.login-box-footer -->

            @stack('login_box_end')
        </div>

        @stack('body_end')
    </body>
</html>
