<?php
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/

namespace Tests\Feature\Common;

use Tests\Feature\FeatureTestCase;

class DashboardTest extends FeatureTestCase
{
    public function testItShouldSeeDashboard()
    {
        $this->loginAs()
            ->get(url('/'))
            ->assertStatus(200)
            ->assertSeeText(trans('general.dashboard'));
    }
}