<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterForTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_for_trains', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('train_id')->unsigned();
            $table->uuid('profile_id')->unsigned();
            $table->decimal('score', 8, 2)->nullable()->default(0);
            $table->enum('status', ['-', 'Register', 'Training', 'Test', 'Not Pass', 'Completed', 'Cancel'])->nullable()->default('-');
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('train_id')->references('id')->on('trainings')->cascadeDelete();
            $table->foreign('profile_id')->references('id')->on('profiles')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_for_trains');
    }
}
