@extends('layouts.admin')
<!--/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/-->
@section('title', trans('errors.error_page'))

@section('content')
<div class="error-page">
    <h2 class="headline text-red">500</h2>

    <div class="error-content">
        <h3><i class="fa fa-warning text-red"></i> {{ trans('errors.body.error_page') }}</h3>

        <p>{!! trans('errors.messages.error_page', ['link' => url('/') ]) !!}</p>
    </div>
</div>
@endsection
