<?php
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/

namespace Tests\Feature\Reports;

use Tests\Feature\FeatureTestCase;

class ProfitLossTest extends FeatureTestCase
{
    public function testItShouldSeeProfitLossPage()
    {
        $this->loginAs()
            ->get(url('reports/profit-loss'))
            ->assertStatus(200)
            ->assertSeeText(trans('reports.profit_loss'));
    }
}