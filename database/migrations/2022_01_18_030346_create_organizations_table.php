<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id');
            $table->uuid('section_id');
            $table->uuid('position_id');
            $table->uuid('shiftment_id');
            $table->uuid('whs_id');
            $table->uuid('territory_id');
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->reference('id')->on('profiles')->cascadeDelete();
            $table->foreign('section_id')->reference('id')->on('sections')->nullOnDelete();
            $table->foreign('position_id')->reference('id')->on('positions')->nullOnDelete();
            $table->foreign('shiftment_id')->reference('id')->on('shiftments')->nullOnDelete();
            $table->foreign('whs_id')->reference('id')->on('whs')->nullOnDelete();
            $table->foreign('territory_id')->reference('id')->on('territories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
