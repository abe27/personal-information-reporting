<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('over_times', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id');
            $table->uuid('section_id');
            $table->date('on_date')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->longText('description')->nullable();
            $table->longText('remark')->nullable();
            $table->enum('status', ['-', 'In Process', 'Reject', 'Approved'])->nullable()->default('-');
            $table->boolean('is_holiday')->nullable()->default(false);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->reference('id')->on('profiles')->cascadeDelete();
            $table->foreign('section_id')->reference('id')->on('sections')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('over_times');
    }
}
