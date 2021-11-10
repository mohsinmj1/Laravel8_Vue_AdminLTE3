<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_templates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('placement_id');
            $table->string('name');
            $table->string('pay');
            $table->string('charge');
            $table->string('duration');
            $table->integer('fields_id');
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
        Schema::dropIfExists('rate_templates');
    }
}
