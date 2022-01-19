<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeEtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_etcs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id')->unsigned();
            $table->boolean('car_drived')->nullable()->default(false);
            $table->boolean('car_drived_license')->nullable()->default(false);
            $table->boolean('motocycle_drived')->nullable()->default(false);
            $table->boolean('motocycle_drived_license')->nullable()->default(false);
            $table->boolean('forklift_drived')->nullable()->default(false);
            $table->boolean('forklift_drived_license')->nullable()->default(false);
            $table->enum('forklift_type', ['-', 'ALL', 'STAND', 'SHIT'])->nullable()->default('-');
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
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
        Schema::dropIfExists('employee_etcs');
    }
}
