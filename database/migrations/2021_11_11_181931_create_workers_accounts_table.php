<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name');
            $table->string('comp_no');
            $table->string('comp_vat');
            $table->string('vat_code');
            $table->string('comp_address');
            $table->string('comp_Country');
            $table->string('comp_country_code');
            $table->string('comp_town');
            $table->string('comp_postcode');
            $table->string('invoice_period');
            $table->string('delivery_invoice');
            $table->string('iban');
            $table->string('Swift');
            $table->string('bank_inst_no');
            $table->string('worder_id');
            $table->boolean('monthly_invoice');
            $table->boolean('neg_creditnode');
            $table->boolean('attach_timesheet');
            $table->boolean('accept_agency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers_accounts');
    }
}
