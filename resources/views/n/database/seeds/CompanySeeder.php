<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Database\Seeds\Accounts::class);
        $this->call(Database\Seeds\BillStatuses::class);
        $this->call(Database\Seeds\Categories::class);
        $this->call(Database\Seeds\Currencies::class);
        $this->call(Database\Seeds\InvoiceStatuses::class);
        $this->call(Database\Seeds\Modules::class);
        $this->call(Database\Seeds\Settings::class);
    }
}
