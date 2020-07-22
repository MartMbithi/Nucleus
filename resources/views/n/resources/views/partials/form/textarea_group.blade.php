@stack($name . '_input_start')

<div class="form-group {{ $col }} {{ isset($attributes['required']) ? 'required' : '' }} {{ $errors->has($name) ? 'has-error' : '' }}">
    {!! Form::label($name, $text, ['class' => 'control-label']) !!}
    {!! Form::textarea($name, $value, array_merge(['class' => 'form-control', 'placeholder' => trans('general.form.enter', ['field' => $text])], $attributes)) !!}
    {!! $errors->first($name, '<p class="help-block">:message</p>') !!}
</div>
<!--
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
-->
@stack($name . '_input_end')