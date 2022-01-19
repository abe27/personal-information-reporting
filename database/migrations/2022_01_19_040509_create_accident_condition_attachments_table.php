<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentConditionAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_condition_attachments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accident_detail_id')->unsigned();
            $table->string('accident_detail_urls');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('accident_detail_id')->references('id')->on('accident_details')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accident_condition_attachments');
    }
}
