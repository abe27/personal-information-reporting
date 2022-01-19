<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcidetCauseAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acidet_cause_attachments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accident_cause_id')->unsigned();
            $table->string('attachment_url');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('accident_cause_id')->references('id')->on('acidet_causes')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acidet_cause_attachments');
    }
}
