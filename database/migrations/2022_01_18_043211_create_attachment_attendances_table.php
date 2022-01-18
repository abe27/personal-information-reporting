<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_attendances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('work_confirm_id');
            $table->string('work_attachment_url');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('work_confirm_id')->reference('id')->on('work_confirmations')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachment_attendances');
    }
}
