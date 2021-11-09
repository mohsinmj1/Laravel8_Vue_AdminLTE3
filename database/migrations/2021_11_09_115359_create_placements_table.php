<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('job_title');
            $table->text('job_desc')->nullable();
            $table->string('client_site')->nullable();
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('consultant_id');
            $table->string('alternative_managers')->nullable();
            $table->string('internal_agency_comments')->nullable();
            $table->unsignedBigInteger('timesheet_duration_id')->nullable();
            $table->unsignedBigInteger('timesheet_layout_id')->nullable();
            $table->string('contracted_hours_per_week')->nullable();
            $table->unsignedBigInteger('timesheet_pay_currency_id')->nullable();
            $table->boolean('timesheet_pay_currency_default')->default(false)->nullable();
            $table->unsignedBigInteger('timesheet_id')->nullable();
            $table->boolean('email_approval')->default(false)->nullable();
            $table->boolean('email_approval_default')->default(false)->nullable();
            $table->string('expense_pay_currency')->nullable();
            $table->boolean('expense_pay_currency_default')->default(false)->nullable();
            $table->unsignedBigInteger('chargeable_expense_id')->nullable();
            $table->unsignedBigInteger('non_chargeable_expense_id')->nullable();
            $table->string('expense_email_approval')->nullable();
            $table->boolean('expense_email_approval_default')->default(false)->nullable();
            $table->unsignedBigInteger('primary_expense_approval_id')->nullable();
            $table->boolean('override_default_invoice_contract')->default(false)->nullable();
            $table->string('department')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('street_1')->nullable();
            $table->string('street_2')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            $table->unsignedBigInteger('country_code_id')->nullable();
            $table->string('postcode')->nullable();
            $table->boolean('recieve_email_worker')->default(false)->nullable();
            $table->boolean('recieve_email_manager')->default(false)->nullable();
            $table->boolean('recieve_email_consultant')->default(false)->nullable();
            $table->boolean('recieve_email_ltd_user')->default(false)->nullable();
            $table->unsignedBigInteger('client_tax_code_id')->nullable();
            $table->boolean('client_tax_code_default')->default(false)->nullable();
            $table->unsignedBigInteger('self_bill_tax_code_id')->nullable();
            $table->boolean('self_bill_tax_code_default')->default(false)->nullable();
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
        Schema::dropIfExists('placements');
    }
}
