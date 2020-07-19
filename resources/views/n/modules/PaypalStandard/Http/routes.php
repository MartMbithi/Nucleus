<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/
Route::group([
    //Use customer middleware
    'middleware' => 'customer',
    'prefix' => 'customers',
    'namespace' => 'Modules\PaypalStandard\Http\Controllers'
], function () {
    Route::get('invoices/{invoice}/paypalstandard', 'PaypalStandard@show');
});

Route::group([
    'prefix' => 'customers',
    'namespace' => 'Modules\PaypalStandard\Http\Controllers'
], function () {
    Route::post('invoices/{invoice}/paypalstandard/result', 'PaypalStandard@result');
    Route::post('invoices/{invoice}/paypalstandard/callback', 'PaypalStandard@callback');
});

Route::group([
    'middleware' => ['signed', 'language'],
    'prefix' => 'signed',
    'namespace' => 'Modules\PaypalStandard\Http\Controllers'
], function () {
    Route::post('invoices/{invoice}/paypalstandard', 'PaypalStandard@show');
});
