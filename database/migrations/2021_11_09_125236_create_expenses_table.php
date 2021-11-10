<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('placement_id');
            $table->integer('period_id');
            $table->unsignedBigInteger('category_id');
            $table->string('reciept_date')->nullable();
            $table->text('description')->nullable();
            $table->string('units')->nullable();
            $table->string('unit_net_rate')->nullable();
            $table->string('sales_tax_rate')->nullable();
            $table->string('sales_tax')->nullable();
            $table->string('gross')->nullable();
            $table->string('currency')->nullable();
            $table->string('receipt')->nullable();
            $table->string('paper_upload')->nullable();
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
        Schema::dropIfExists('expenses');
    }
}
