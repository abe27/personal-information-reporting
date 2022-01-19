<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('action_id');
            $table->uuid('action_by_id');
            $table->date('on_date');
            $table->decimal('score', 8, 2);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('action_id')->reference('id')->on('action_for_areas')->cascadeDelete();
            $table->foreign('action_by_id')->reference('id')->on('users')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
