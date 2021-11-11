<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_main', function (Blueprint $table) {
            $table->integer('um_id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('mobile');
            $table->string('gender');
            $table->date('dob');
            $table->date('joning_date');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('Country');
            $table->string('country_code');
            $table->string('town');
            $table->string('postcode');
            $table->string('worker_type');
            $table->string('payroll');
            $table->string('engagement_type');
            $table->string('default_currency');
            $table->string('primary');
            $table->string('accounts');
            $table->string('team');
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
        Schema::dropIfExists('workers');
    }
}
