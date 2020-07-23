@extends('layouts.print')
<!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
@section('title', trans('reports.summary.income'))

@section('content')
    @include('reports.income_summary.body')
@endsection