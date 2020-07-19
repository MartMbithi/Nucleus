<!--/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ -->
<h2>{{ $gateway['name'] }}</h2>

@if ($gateway['description'])
<div class="well well-sm">
    {{ $gateway['description'] }}
</div>
@endif
