@extends('layouts.print')
<!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    */-->
@section('title', trans('reports.summary.income_expense'))

@section('content')
    @include('reports.income_expense_summary.body')
@endsection