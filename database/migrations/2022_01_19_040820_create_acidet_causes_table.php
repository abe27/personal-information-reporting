<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcidetCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acidet_causes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accident_id');
            $table->longText('analyze_cause');
            $table->longText('prevent');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('accident_id')->reference('id')->on('accident_heders')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acidet_causes');
    }
}
