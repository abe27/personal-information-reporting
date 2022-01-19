<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentHedersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_heders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accident_id')->unsigned();
            $table->string('ind_no')->unique();
            $table->string('di_no')->nullable();
            $table->string('hr_no')->nullable();
            $table->date('accident_date');
            $table->time('accident_time');
            $table->uuid('offender_id')->unsigned();
            $table->longText('description')->nullable();
            $table->enum('status', ['-', 'In Process', 'Leader Accepted', 'HR Accepted', 'Claimed', 'Completed'])->nullable()->default('-');
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('accident_id')->references('id')->on('accident_types')->cascadeDelete();
            $table->foreign('offender_id')->references('id')->on('profiles')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accident_heders');
    }
}
