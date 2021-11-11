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
            $table->unsignedBigInteger('placement_id');
            $table->string('name');
            $table->string('department');
            $table->string('email');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('mobile');
            $table->string('address');
            $table->string('Country');
            $table->string('country_code');
            $table->string('town');
            $table->string('postcode');
            $table->string('logo');
            $table->string('favicon');
            $table->string('ic_department');
            $table->string('ic_email');
            $table->string('ic_fname');
            $table->string('ic_lname');
            $table->string('ic_phone');
            $table->string('ic_mobile');
            $table->string('ic_address');
            $table->string('ic_town');
            $table->string('ic_postcode');
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
