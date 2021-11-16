<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id');
            $table->string('invoice_number');
            $table->string('account_ref');
            $table->string('credited');
            $table->string('invoice_date');
            $table->string('client');
            $table->string('consolidated_by');
            $table->string('consolidated_entry');
            $table->double('net');
            $table->double('tax_code');
            $table->double('tax');
            $table->double('gross');
            $table->double('currency');
            $table->double('net_gbp');
            $table->double('exchange_rate');
            $table->string('primary_recipient');
            $table->string('additional_recipients');
            $table->string('sent');
            $table->string('exported');
            $table->string('due_date');
            $table->string('paid');
            $table->string('created_date');
            $table->string('created_by');
            $table->string('internal_comment');
            $table->string('payroll');
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
        Schema::dropIfExists('pay_invoices');
    }
}
