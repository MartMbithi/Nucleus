<!--
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
-->
@extends('layouts.admin')

@section('title', trans_choice('general.notifications', 2))

@section('content')
<!-- Default box -->

<div class="box box-success">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->

    <div class="box-body">
        <div class="table table-responsive">
            <table class="table table-striped table-hover" id="tbl-notifications">
                <thead>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        @include('partials.admin.pagination', ['items' => $notifications, 'type' => 'notifications'])
    </div>
    <!-- /.box-footer -->
</div>
<!-- /.box -->
@endsection

