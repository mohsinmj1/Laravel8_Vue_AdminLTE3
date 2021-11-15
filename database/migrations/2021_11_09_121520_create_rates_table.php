<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pay');
            $table->unsignedBigInteger('pay_currency_id');
            $table->string('charge');
            $table->unsignedBigInteger('charge_currency_id');
            $table->string('frontend_ref');
            $table->string('backend_ref');
            $table->unsignedBigInteger('pay_element_id');
            $table->unsignedBigInteger('time_pattern_id');
            $table->unsignedBigInteger('time_period_id');
            $table->bigInteger('duration');
            $table->unsignedBigInteger('timesheet_fields_id');

            $table->boolean('show_comment_box')->default(false);
            $table->boolean('worker_can_select')->default(false);
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
        Schema::dropIfExists('rates');
    }
}
