<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->unsigned();
            $table->uuid('company_id')->unsigned();
            $table->string('fullname')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeDelete();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
