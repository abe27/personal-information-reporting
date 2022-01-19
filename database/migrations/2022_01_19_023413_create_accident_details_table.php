<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accident_id')->unsigned();
            $table->longText('accident_place');
            $table->longText('accident_detail')->nullable();
            $table->uuid('condition_id')->nullable()->unsigned();
            $table->longText('condition_detail')->nullable();
            $table->uuid('forklift_id')->nullable()->unsigned();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('accident_id')->references('id')->on('accident_heders')->cascadeDelete();
            $table->foreign('condition_id')->references('id')->on('accident_conditions')->nullOnDelete();
            $table->foreign('forklift_id')->references('id')->on('forklifts')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accident_details');
    }
}
