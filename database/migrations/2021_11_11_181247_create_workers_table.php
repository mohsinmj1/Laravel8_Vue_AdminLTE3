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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('mobile');
            $table->string('gender');
            $table->date('dob');
            $table->date('date_joning');
            $table->string('address');
            $table->string('Country');
            $table->string('country_code');
            $table->string('town');
            $table->string('postcode');
            $table->string('nin_no');
            $table->string('tax_reference');
            $table->integer('role_id');
            $table->integer('agency_id');
            $table->integer('manager_id');
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
