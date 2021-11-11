<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts_details', function (Blueprint $table) {
            $table->integer('uad_id');
            $table->integer('user_id');
            $table->string('company_name');
            $table->string('company_no');
            $table->string('company_vat');
            $table->string('vat_code');
            $table->string('iban');
            $table->string('Swift');
            $table->string('bank_inst_no');
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
        Schema::dropIfExists('user_accounts_details');
    }
}
