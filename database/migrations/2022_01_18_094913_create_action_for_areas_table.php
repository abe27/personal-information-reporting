<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionForAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_for_areas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('area_id');
            $table->uuid('activity_id');
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('area_id')->reference('id')->on('territories')->cascadeDelete();
            $table->foreign('activity_id')->reference('id')->on('activites_lists')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_for_areas');
    }
}
