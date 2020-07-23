<?php
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/

namespace Tests\Feature\Reports;

use Tests\Feature\FeatureTestCase;

class TaxSummaryTest extends FeatureTestCase
{
    public function testItShouldSeeTaxSummaryPage()
    {
        $this->loginAs()
            ->get(url('reports/tax-summary'))
            ->assertStatus(200)
            ->assertSeeText(trans('reports.summary.tax'));
    }
}