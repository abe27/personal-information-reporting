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
            $table->uuid('profile_id')->unsigned();
            $table->uuid('section_id')->nullable()->unsigned();
            $table->uuid('position_id')->nullable()->unsigned();
            $table->uuid('shiftment_id')->nullable()->unsigned();
            $table->uuid('whs_id')->nullable()->unsigned();
            $table->uuid('territory_id')->nullable()->unsigned();
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profiles')->cascadeDelete();
            $table->foreign('section_id')->references('id')->on('sections')->nullOnDelete();
            $table->foreign('position_id')->references('id')->on('positions')->nullOnDelete();
            $table->foreign('shiftment_id')->references('id')->on('shiftments')->nullOnDelete();
            $table->foreign('whs_id')->references('id')->on('whs')->nullOnDelete();
            $table->foreign('territory_id')->references('id')->on('territories')->nullOnDelete();
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
