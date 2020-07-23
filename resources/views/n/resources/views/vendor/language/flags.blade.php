<!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    😬 
    Credits Akaunting for languages package
    */-->
<ul class="{{ config('language.flags.ul_class') }}">
@foreach (language()->allowed() as $code => $name)
    <li class="{{ config('language.flags.li_class') }}">
        <a href="{{ language()->back($code) }}">
            <img src="{{ asset('vendor/akaunting/language/src/Resources/assets/img/flags/'. language()->country($code) .'.png') }}" alt="{{ $name }}" width="{{ config('language.flags.width') }}" /> &nbsp; {{ $name }}
        </a>
    </li>
@endforeach
</ul>