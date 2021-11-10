<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->string('project_code');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('placement_id');
            $table->unsignedBigInteger('rate_id');
            $table->string('date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('break_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('hours')->nullable();
            $table->integer('units')->nullable();
            $table->unsignedBigInteger('code_id');
            $table->text('comment');
            $table->string('internal_comment');
            $table->string('paper_upload');
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
        Schema::dropIfExists('timesheets');
    }
}
