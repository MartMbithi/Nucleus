@foreach ($items as $item)
    @if ($item->hasChilds())
        @include('menus::item.dropdown', compact('item'))
    @else
        @include('menus::item.item', compact('item'))
    @endif
@endforeach
<!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    😬 
    */-->