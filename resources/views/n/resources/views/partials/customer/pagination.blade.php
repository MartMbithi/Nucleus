@stack('pagination_start')
<!--
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
-->
@if ($items->firstItem())
    <div class="pull-left" style="margin-top: 7px;">
        <small>{{ trans('pagination.showing', ['first' => $items->firstItem(), 'last' => $items->lastItem(), 'total' => $items->total(), 'type' => strtolower((isset($title)) ? $title : trans_choice('general.' . $type, 2))]) }}</small>
    </div>
    <div class="pull-right">
        {!! $items->appends(request()->except('page'))->links() !!}
    </div>
@else
    <div class="pull-left">
        <small>{{ trans('general.no_records') }}</small>
    </div>
@endif

@stack('pagination_end')
