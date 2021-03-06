<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

use Illuminate\Database\Migrations\Migration;

class AddCategoryColumnInvoicesBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function ($table) {
            $table->integer('category_id')->default();
        });

        Schema::table('bills', function ($table) {
            $table->integer('category_id')->default();
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('invoices', function ($table) {
			$table->dropColumn('category_id');
		});

		Schema::table('bills', function ($table) {
			$table->dropColumn('category_id');
		});
	}
}
