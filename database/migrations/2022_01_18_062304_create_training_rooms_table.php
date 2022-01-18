<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_rooms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('room_no');
            $table->longText('description')->nullable();
            $table->boolean('is_idle')->nullable()->default(true);
            $table->boolean('is_status')->nullable()->default(false);
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
        Schema::dropIfExists('training_rooms');
    }
}
