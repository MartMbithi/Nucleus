<?php
/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

namespace Database\Seeds;

use App\Models\Model;
use App\Models\Auth\User;
use App\Models\Common\Company;
use Date;
use Illuminate\Database\Seeder;

class TestCompany extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(Roles::class);

        $this->createCompany();

        $this->createUser();

        Model::reguard();
    }

    private function createCompany()
    {
        $rows = [
            [
                'id' => '1',
                'domain' => 'martdev.info',
            ],
        ];

        foreach ($rows as $row) {
            Company::create($row);
        }

        setting()->setExtraColumns(['company_id' => '1']);
        setting()->set([
            'general.company_name'              => 'MartDevelopers Inc.',
            'general.company_email'             => 'martdevelopers254@gmail.com',
            'general.company_address'           => '127.0.0.1 Localhost',
            'general.financial_start'           => '01-01',
            'general.default_currency'          => 'KSH',
            'general.default_account'           => '1',
            'general.default_payment_method'    => 'offlinepayment.cash.1',
            'general.schedule_bill_days'        => '10,5,3,1',
            'general.schedule_invoice_days'     => '1,3,5,10',
            'general.send_invoice_reminder'     => true,
            'general.send_bill_reminder'        => true,
        ]);
        setting()->save();

        $this->command->info('Test company created.');
    }

    public function createUser()
    {
        // Create user
        $user = User::create([
            'name' => 'MartDevelopers',
            'email' => 'test@martdevelopers.inc',
            'password' => '123456',
            'last_logged_in_at' => Date::now(),
        ]);

        // Attach Role
        $user->roles()->attach(1);

        // Attach company
        $user->companies()->attach(1);

        $this->command->info('Admin user created.');
    }
}
