<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number')->nullable();
            $table->string('sales_vat_number')->nullable();
            $table->string('vat_code')->nullable();
            $table->string('currency_id')->nullable();
            $table->string('self_billing')->nullable();
            $table->string('send_copies_of_timesheets')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('department_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('line_1')->nullable();
            $table->string('line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('post_code')->nullable();
            $table->string('country_id')->nullable();
            $table->boolean('is_active')->nullable();

            $table->string('ic_department')->nullable();
            $table->string('ic_email')->nullable();
            $table->string('ic_first_name')->nullable();
            $table->string('ic_last_name')->nullable();
            $table->string('ic_phone')->nullable();
            $table->string('ic_mobile')->nullable();
            $table->string('ic_line_1')->nullable();
            $table->string('ic_line_2')->nullable();
            $table->string('ic_city')->nullable();
            $table->string('ic_county')->nullable();
            $table->string('ic_post_code')->nullable();
            $table->string('ic_country_id')->nullable();
            $table->string('ic_postcode')->nullable();
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
        Schema::dropIfExists('agency');
    }
}
