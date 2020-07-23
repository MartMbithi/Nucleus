<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

namespace Database\Seeds;

use App\Models\Model;
use App\Models\Setting\Currency;
use Illuminate\Database\Seeder;

class Currencies extends Seeder
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
                'name' => trans('demo.currencies_ksh'),
                'code' => 'KSH',
                'rate' => '0.01',
                'enabled' => '1',
                'precision' => config('money.KSH.precision'),
                'symbol' => config('money.KSH.symbol'),
                'symbol_first' => config('money.KSH.symbol_first'),
                'decimal_mark' => config('money.KSH.decimal_mark'),
                'thousands_separator' => config('money.KSH.thousands_separator'),
            ],
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies_eur'),
                'code' => 'EUR',
                'rate' => '1.25',
                'precision' => config('money.EUR.precision'),
                'symbol' => config('money.EUR.symbol'),
                'symbol_first' => config('money.EUR.symbol_first'),
                'decimal_mark' => config('money.EUR.decimal_mark'),
                'thousands_separator' => config('money.EUR.thousands_separator'),
            ],
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies_gbp'),
                'code' => 'GBP',
                'rate' => '1.60',
                'precision' => config('money.GBP.precision'),
                'symbol' => config('money.GBP.symbol'),
                'symbol_first' => config('money.GBP.symbol_first'),
                'decimal_mark' => config('money.GBP.decimal_mark'),
                'thousands_separator' => config('money.GBP.thousands_separator'),
            ],
            [
                'company_id' => $company_id,
                'name' => trans('demo.currencies_try'),
                'code' => 'TRY',
                'rate' => '0.80',
                'precision' => config('money.TRY.precision'),
                'symbol' => config('money.TRY.symbol'),
                'symbol_first' => config('money.TRY.symbol_first'),
                'decimal_mark' => config('money.TRY.decimal_mark'),
                'thousands_separator' => config('money.TRY.thousands_separator'),
            ],
        ];

        foreach ($rows as $row) {
            Currency::create($row);
        }
    }
}
