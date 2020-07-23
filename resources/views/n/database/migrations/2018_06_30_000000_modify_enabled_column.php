<?php

/*
* Product         :   Nucleus ERP
* License         :   MIT license
* Where To Find Us:   https://martdev.info
* Email Us        :   martdevelopers254@gmail.com
*/ 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ModifyEnabledColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->boolean('enabled')->default(1)->change();
        });
        
        Schema::table('categories', function (Blueprint $table) {
            $table->boolean('enabled')->default(1)->change();
        });
        
        Schema::table('currencies', function (Blueprint $table) {
            $table->boolean('enabled')->default(1)->change();
        });
        
        Schema::table('items', function (Blueprint $table) {
            $table->boolean('enabled')->default(1)->change();
        });
        
        Schema::table('customers', function (Blueprint $table) {
            $table->boolean('enabled')->default(1)->change();
        });
        
        Schema::table('vendors', function (Blueprint $table) {
            $table->boolean('enabled')->default(1)->change();
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
