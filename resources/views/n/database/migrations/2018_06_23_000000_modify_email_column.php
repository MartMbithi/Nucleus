<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ModifyEmailColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
        });

        Schema::table('invoices', function (Blueprint $table) {
            $table->string('customer_email')->nullable()->change();
        });

        Schema::table('vendors', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->string('vendor_email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
