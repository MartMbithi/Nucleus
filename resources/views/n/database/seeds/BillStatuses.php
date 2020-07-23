<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

namespace Database\Seeds;

use App\Models\Model;
use App\Models\Expense\BillStatus;
use Illuminate\Database\Seeder;

class BillStatuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->create();

        Model::reguard();
    }

    private function create()
    {
        $company_id = $this->command->argument('company');

        $rows = [
            [
                'company_id' => $company_id,
                'name' => trans('bills.status.draft'),
                'code' => 'draft',
            ],
            [
                'company_id' => $company_id,
                'name' => trans('bills.status.received'),
                'code' => 'received',
            ],
            [
                'company_id' => $company_id,
                'name' => trans('bills.status.partial'),
                'code' => 'partial',
            ],
            [
                'company_id' => $company_id,
                'name' => trans('bills.status.paid'),
                'code' => 'paid',
            ],
        ];

        foreach ($rows as $row) {
            BillStatus::create($row);
        }
    }
}
