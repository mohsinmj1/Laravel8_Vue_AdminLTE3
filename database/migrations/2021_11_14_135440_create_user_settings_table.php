<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->string('worker_type')->nullable();
            $table->string('payroll_type_id')->nullable();
            $table->string('sms_opt')->nullable();
            $table->string('engagement_type')->nullable();
            $table->string('currency_id')->nullable();

            $table->string('timesheet_duration')->nullable();
            $table->string('expensesheet_duration')->nullable();
            $table->string('timesheet_approver_id')->nullable();
            $table->string('chargeable_expense_approver_id')->nullable();
            $table->string('non_chargeable_expense_approver_id')->nullable();

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
        Schema::dropIfExists('user_settings');
    }
}
