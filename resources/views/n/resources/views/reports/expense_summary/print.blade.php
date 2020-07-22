@extends('layouts.print')
<!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
@section('title', trans('reports.summary.expense'))

@section('content')
    @include('reports.expense_summary.body')
@endsection