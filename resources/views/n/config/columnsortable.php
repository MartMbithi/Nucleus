<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/

return [

    'columns' => [
        'alpha' => [
            'rows' => ['name', 'customer_name', 'vendor_name', 'display_name', 'company_name', 'domain', 'email', 'description', 'code', 'type', 'status', 'vendor', 'account', 'bill_status_code', 'invoice_status_code'],
            'class' => 'fa fa-sort-alpha',
        ],
        'amount' => [
            'rows' => ['amount', 'price', 'sale_price', 'purchase_price', 'total_price', 'current_balance', 'total_price', 'opening_balance'],
            'class' => 'fa fa-sort-amount'
        ],
        'numeric' => [
            'rows' => ['created_at', 'updated_at', 'paid_at', 'invoiced_at', 'billed_at', 'due_at', 'id', 'quantity', 'rate',  'number', 'invoice_number', 'bill_number'],
            'class' => 'fa fa-sort-numeric'
        ],
    ],

    
    'default_icon_set' => 'fa fa-long-arrow-down sort-icon',

    
    'sortable_icon' => 'fa fa-long-arrow-down sort-icon',

    'clickable_icon' => false,

    
    'icon_text_separator' => '&nbsp; ',

    'asc_suffix' => '-asc',

    
    'desc_suffix' => '-desc',

    'anchor_class' => null,

   
    'uri_relation_column_separator' => '.',

    
    'formatting_function' => 'ucfirst',

    'inject_title_as' => null,

    'allow_request_modification' => true,

    'default_direction' => 'asc',

    'default_direction_unsorted' => 'asc'
];
