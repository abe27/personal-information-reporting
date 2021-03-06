<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_confirmations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id')->unsigned();
            $table->uuid('reason_id')->unsigned();
            $table->date('at_date');
            $table->time('at_time');
            $table->longText('description')->nullable();
            $table->enum('status', ['-', 'In Process', 'Reject', 'Approved'])->nullable()->default('-');
            $table->longText('remark')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profiles')->cascadeDelete();
            $table->foreign('reason_id')->references('id')->on('reason_attendances')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_confirmations');
    }
}
