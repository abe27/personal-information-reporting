<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('subject');
            $table->date('on_date');
            $table->time('from_time');
            $table->time('to_time');
            $table->uuid('room_id')->unsigned();
            $table->uuid('trainer_id')->unsigned();
            $table->longText('description')->nullable();
            $table->enum('status', ['-', 'In Process', 'Training', 'Closed'])->nullable()->default('-');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('room_id')->references('id')->on('training_rooms')->cascadeDelete();
            $table->foreign('trainer_id')->references('id')->on('trainers')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
