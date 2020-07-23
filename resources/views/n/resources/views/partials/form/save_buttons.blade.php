@stack('save_buttons_start')

<div class="{{ $col }}">
    <div class="form-group no-margin">
        {!! Form::button('<span class="fa fa-save"></span> &nbsp;' . trans('general.save'), ['type' => 'submit', 'class' => 'btn btn-success  button-submit', 'data-loading-text' => trans('general.loading')]) !!}
        <a href="{{ url($cancel) }}" class="btn btn-default"><span class="fa fa-times-circle"></span> &nbsp;{{ trans('general.cancel') }}</a>
    </div>
</div>
<!--
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
-->
@stack('save_buttons_end')
