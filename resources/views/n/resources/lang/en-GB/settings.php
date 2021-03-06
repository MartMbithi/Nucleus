<?php
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
return [

    'company' => [
        'name'              => 'Name',
        'email'             => 'Email',
        'phone'             => 'Phone',
        'address'           => 'Address',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Localisation',
        'financial_start'   => 'Financial Year Start',
        'timezone'          => 'Time Zone',
        'date' => [
            'format'        => 'Date Format',
            'separator'     => 'Date Separator',
            'dash'          => 'Dash (-)',
            'dot'           => 'Dot (.)',
            'comma'         => 'Comma (,)',
            'slash'         => 'Slash (/)',
            'space'         => 'Space ( )',
        ],
        'percent' => [
            'title'         => 'Percent (%) Position',
            'before'        => 'Before Number',
            'after'         => 'After Number',
        ],
    ],
    'invoice' => [
        'tab'               => 'Invoice',
        'prefix'            => 'Number Prefix',
        'digit'             => 'Number Digit',
        'next'              => 'Next Number',
        'logo'              => 'Logo',
        'custom'            => 'Custom',
        'item_name'         => 'Item Name',
        'item'              => 'Items',
        'product'           => 'Products',
        'service'           => 'Services',
        'price_name'        => 'Price Name',
        'price'             => 'Price',
        'rate'              => 'Rate',
        'quantity_name'     => 'Quantity Name',
        'quantity'          => 'Quantity',
    ],
    'default' => [
        'tab'               => 'Defaults',
        'account'           => 'Default Account',
        'currency'          => 'Default Currency',
        'tax'               => 'Default Tax Rate',
        'payment'           => 'Default Payment Method',
        'language'          => 'Default Language',
    ],
    'email' => [
        'protocol'          => 'Protocol',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP Username',
            'password'      => 'SMTP Password',
            'encryption'    => 'SMTP Security',
            'none'          => 'None',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail Path',
        'log'               => 'Log Emails',
    ],
    'scheduling' => [
        'tab'               => 'Scheduling',
        'send_invoice'      => 'Send Invoice Reminder',
        'invoice_days'      => 'Send After Due Days',
        'send_bill'         => 'Send Bill Reminder',
        'bill_days'         => 'Send Before Due Days',
        'cron_command'      => 'Cron Command',
        'schedule_time'     => 'Hour To Run',
        'send_item_reminder'=> 'Send Item Reminder',
        'item_stocks'       => 'Send When Item Stock',
    ],
    'appearance' => [
        'tab'               => 'Appearance',
        'theme'             => 'Theme',
        'light'             => 'Light',
        'dark'              => 'Dark',
        'list_limit'        => 'Records Per Page',
        'use_gravatar'      => 'Use Gravatar',
    ],
    'system' => [
        'tab'               => 'System',
        'session' => [
            'lifetime'      => 'Session Lifetime (Minutes)',
            'handler'       => 'Session Handler',
            'file'          => 'File',
            'database'      => 'Database',
        ],
        'file_size'         => 'Max File Size (MB)',
        'file_types'        => 'Allowed File Types',
    ],

];
