<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_exams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('training_id')->unsigned();
            $table->uuid('exam_detail_id')->unsigned();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('training_id')->references('id')->on('register_for_trains')->cascadeDelete();
            $table->foreign('exam_detail_id')->references('id')->on('exam_details')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('take_exams');
    }
}
