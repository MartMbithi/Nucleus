<!--
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
-->
@stack('footer_start')

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>{{ trans('footer.version') }}</b> {{ version('short') }}
    </div>
    <strong>{{ trans('footer.powered') }}</strong>: <a href="{{ trans('footer.link') }}" target="_blank">{{ trans('footer.software') }}</a>
</footer>

@stack('footer_end')
