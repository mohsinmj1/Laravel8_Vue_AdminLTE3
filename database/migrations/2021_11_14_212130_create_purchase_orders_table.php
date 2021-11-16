<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('po_number');
            $table->integer('client_id');
            $table->string('description')->nullable();
            $table->date('invoice_date_from')->nullable();
            $table->date('invoice_date_to')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->date('expense_date_from')->nullable();
            $table->date('expense_date_to')->nullable();
            $table->string('hours')->nullable();
            $table->string('is_active')->nullable();
            $table->string('paper')->nullable();

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
        Schema::dropIfExists('purchase_orders');
    }
}
