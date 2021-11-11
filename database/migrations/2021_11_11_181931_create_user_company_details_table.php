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
        Schema::create('user_company_details', function (Blueprint $table) {
            $table->integer('ucd_id');
            $table->integer('user_id');
            $table->string('company_name');
            $table->string('company_no');
            $table->string('company_vat');
            $table->string('vat_code');
            $table->string('company_address');
            $table->string('company_Country');
            $table->string('company_country_code');
            $table->string('company_town');
            $table->string('company_postcode');
            $table->string('invoice_period');
            $table->string('delivery_invoice');
            $table->string('iban');
            $table->string('Swift');
            $table->boolean('self_billing');
            $table->string('copy_timesheet');
            $table->boolean('send_invoices');
            $table->boolean('default_currency');
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
