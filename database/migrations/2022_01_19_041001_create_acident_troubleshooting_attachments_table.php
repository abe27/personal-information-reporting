<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcidentTroubleshootingAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acident_troubleshooting_attachments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accident_cause_id');
            $table->string('attachment_url');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('accident_cause_id')->reference('id')->on('acidet_causes')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acident_troubleshooting_attachments');
    }
}
