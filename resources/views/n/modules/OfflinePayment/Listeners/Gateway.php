<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/

namespace Modules\OfflinePayment\Listeners;

use App\Events\PaymentGatewayListing;

class Gateway
{
    /**
     * Handle the event.
     *
     * @param  PaymentGatewayListing $event
     * @return void
     */
    public function handle(PaymentGatewayListing $event)
    {
        return json_decode(setting('offlinepayment.methods'), true);
    }
}
