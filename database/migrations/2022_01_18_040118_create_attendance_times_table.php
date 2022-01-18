<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_times', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id');
            $table->date('on_date');
            $table->time('in_time')->nullable();
            $table->time('out_time')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', ['-', 'Absent', 'Normal', 'In Process', 'Reject', 'Approved'])->nullable()->default('-');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->reference('id')->on('profiles')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_times');
    }
}
