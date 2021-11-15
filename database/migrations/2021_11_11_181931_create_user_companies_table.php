<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_companies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');


            $table->string('company_name');
            $table->string('company_number')->nullable();
            $table->string('company_sales_vat_number')->nullable();
            $table->string('company_vat_code')->nullable();
            $table->string('company_currency')->nullable();
            $table->string('self_billing')->nullable();
            $table->string('send_copies_of_timesheets')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('department_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('line_1')->nullable();
            $table->string('line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('sales_vat_number')->nullable();
            $table->string('county')->nullable();
            $table->string('post_code')->nullable();
            $table->string('country_id')->nullable();
            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('user_companies');
    }
}
